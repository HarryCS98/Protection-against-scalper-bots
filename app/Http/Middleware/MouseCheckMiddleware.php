<?php

namespace App\Http\Middleware;

use App\Models\Bannedips;
use App\Models\Mongo\distance_2d;
use App\Models\Mongo\MousePosition;
use App\Models\Products\test;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;

class MouseCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {


        /*Get external ip wouldnt be an issue if we where not running on a local xammp server*/
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];


        //TODO if this returns null the entire application will fail
        $lastpage = MousePosition::where('ip', $externalIp)->orderBy("updated_at","DESC")->get();



        /*Make sure the is at least one record else a crash occurs */
        if (sizeof($lastpage) >= 1 ){

        /*If there is null value in the coords variable and there is another document with null from this user or if there is less then 5 elements in the any of the previous pages
        Then ban the user*/
        if($lastpage[0]['xpos'] == null){
            for($i = 1; $i < sizeof($lastpage); $i++){
               if($lastpage[$i]['xpos'] == null){
                   $BannedIps_table = new Bannedips;
                   $BannedIps_table->ips =$externalIp;
                   $BannedIps_table->Reason = "No mouse points";
                   $BannedIps_table->save();
                   return redirect()->route('home');
               }
                if (sizeof($lastpage[$i]['xpos']) < 5){
                    $BannedIps_table = new Bannedips;
                    $BannedIps_table->ips =$externalIp;
                    $BannedIps_table->Reason = "No mouse points";
                    $BannedIps_table->save();
                    return redirect()->route('home');
                }
            }
        }


        //continue to next page if there is no coordinates and the previous method did not ban the user
        if ($lastpage[0]['xpos'] == null){
            return $next($request);
        }

        else {

            /*Break up our coords into an array*/
            /*$coordsArray = explode(",", $lastpage[0]['coords']);*/

         /*   $coordsArray = [];

            for($i = 0; $i < $lastpage[0]['xpos']; $i + 2){

                $coordsArray[$i] = $lastpage[0]['xpos'][$i];
                $coordsArray[$i + 1] = $lastpage[0]['ypos'][$i];

            }*/

            /*Ban the user if there is less than 5 mouse movement data points and more than one point*/
/*
            if ( sizeof($coordsArray) < 5 && sizeof($coordsArray) > 1) {

                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "Less then five mouse points";
                $BannedIps_table->save();

                return redirect()->route('home');
            }*/



            /*Create an empty array that we will push all our 2d distance data to*/
            $lowest_number = [];

            /*Loop through our coordsarray which holds all the coordinates to the mouse data we have collected */
            for ($i = 0; $i < sizeof($lastpage[0]['xpos']); $i++) {


                /*Make sure we dont try and get a value from an index in the array that doesnt exist*/
                if ($i + 1 < sizeof($lastpage[0]['xpos']) && $i + 2 < sizeof($lastpage[0]['xpos']) && $i + 3 < sizeof($lastpage[0]['xpos'])) {


                    /*Calculate the 2d distance between every two points in our array*/
                    $x = $lastpage[0]['xpos'][$i] - $lastpage[0]['xpos'][$i + 1];

                    $SquaredX = $x * $x;

                    $y = $lastpage[0]['ypos'][$i] - $lastpage[0]['ypos'][$i + 1];

                    $SquaredY = $y * $y;

                    $SquaredAdded = $SquaredX + $SquaredY;

                    $result = sqrt($SquaredAdded);

                    /*Push the 2d distances to our $Lowest_number array*/
                    array_push($lowest_number, $result);


                }

            }

            /*Send our 2d distance data to our database bans are calculated in real time but this is useful information to analise */

            $raw_url = url()->previous();

            $clean_url = str_replace("http://", "", $raw_url);

            $distance_2d_database = new distance_2d;

            $distance_2d_database->ip = $externalIp;

            $distance_2d_database->url = $clean_url;

            $distance_2d_database->distances = $lowest_number;

            $distance_2d_database->save();


            /*We check to see if the user has clicked in the same spot over and over again if they have we ban them*/
            /*To do this we take our counter value from above and then we minus 5 from the length of the array which allows space for a bot click in the same spot then try and navigate to the next page*/
            $distancearray = distance_2d::where('ip', $externalIp)->orderBy("updated_at", "DESC")->get();


            /*Set counter to zero*/
            $counter = 0;

            /*Loop through our distance database and look in our distances array we add one to the counter if the distance is zero or the same as the previous distance value*/
            for ($i = 0; $i < sizeof($distancearray[0]['distances']); $i++) {
                if ($distancearray[0]['distances'][$i] == 0 || $i > 0 && $distancearray[0]['distances'][$i] == $distancearray[0]['distances'][$i - 1]) {
                    $counter++;
                }
            }

            /*If the counter is equal greater than the size of our array minus 5 this gives us leeway for if the bot clicks in the same places then does a couple more clicks before navigating*/
            /* the leeway being 5 clicks*/
            if ($counter >= sizeof($distancearray[0]['distances']) - 5) {
                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "Mouse Clicked to many times in the same place";
                $BannedIps_table->save();
                return redirect()->route('home');
            }


            /*Puts the lowest number first*/
            sort($lowest_number);


            /*If the lowest number in the array is bigger than 50 then ban the user*/
            /*This is not normally triggered but we have seen a few instances where this has happened which is why we have a method for it*/
            if (isset($lowest_number[0]) && $lowest_number[0] > 50) {

                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "Your lowest distance between points indicates you are a bot";
                $BannedIps_table->save();

                return redirect()->route('home');

            }

            /*Put our biggest distance first in the array*/
            rsort($lowest_number);


            /*If the biggest number is greater than 400 then ban the user this is the most common one triggered if the bot tries to simulate clicks to bypass our
            other methods*/

            //TODO causing false postives when opening the window from being minimized and then moving the mouse around
            //TODO maybe do a count of these over 400 rather than just checking for one of them

            $countLargeNumber = 0;
            for($i = 0; $i < sizeof($lowest_number); $i ++){
                if($lowest_number[$i] > 400){
                    $countLargeNumber ++;
                }
            }


           if (isset($lowest_number[0]) && $countLargeNumber >= 5) {

                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "Your highest distance between points indicates you are a bot";
                $BannedIps_table->save();

                return redirect()->route('home');

            }


            $biggest_number = rsort($lowest_number);
            $lowest_number = sort($lowest_number);

            /*if the range of distances is greater then 400 then ban the user on the 5th biggest numbers as sometimes there can be errors when tabbing back into a window*/
            if (isset($lowest_number[0]) && $biggest_number[4] - $lowest_number[0] > 400) {

                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "Your range of distances between points indicates you are a bot";
                $BannedIps_table->save();

                return redirect()->route('home');

            }

        }



        }

        return $next($request);

    }
}
