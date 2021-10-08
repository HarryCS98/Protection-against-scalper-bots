<?php

namespace App\Http\Middleware;

use App\Models\Mongo\Keyboard_time;
use Closure;
use Illuminate\Http\Request;
use App\Models\Bannedips;
use Illuminate\Http\Response;

class KeyboardTimingMiddleware
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

        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];


        //TODO if this returns null the entire application will fail
        $lastpage = Keyboard_time::where('ip', $externalIp)->orderBy("updated_at","DESC")->get();


        if (sizeof($lastpage) != 0) {

            if (sizeof($lastpage[0]["time_data"]) == 0) {
                $BannedIps_table = new Bannedips;
                $BannedIps_table->ips = $externalIp;
                $BannedIps_table->Reason = "No Keyboard data";
                $BannedIps_table->save();
                return redirect()->route('home');
            }

            for ($i = 0; $i < sizeof($lastpage[0]["time_data"]); $i++) {

                if ($lastpage[0]["time_data"][$i] < 3) {
                    $BannedIps_table = new Bannedips;
                    $BannedIps_table->ips = $externalIp;
                    $BannedIps_table->Reason = "Data input to fast";
                    $BannedIps_table->save();
                    return redirect()->route('home');
                }


            }

            return $next($request);
        }
        else{
            $BannedIps_table = new Bannedips;
            $BannedIps_table->ips = $externalIp;
            $BannedIps_table->Reason = "No Keyboard data";
            $BannedIps_table->save();
            return redirect()->route('home');
        }
    }
}
