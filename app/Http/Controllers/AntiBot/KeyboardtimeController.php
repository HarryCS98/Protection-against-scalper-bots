<?php

namespace App\Http\Controllers\AntiBot;

use App\Models\Mongo\Keyboard_time;
use App\Models\Products\AirCooler;
use App\Http\Controllers\Controller;
use App\Models\Products\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Object_;


class KeyboardtimeController extends Controller
{
    public function index($ip,$url,$time_data/*Request $request*/ )
    {
       $database = new Keyboard_time();

        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];

       $document = $database::query()->where('ip',$externalIp)->where('url',$url)->latest()->limit(1)->get();


       $temp_array = $document[0]['time_data'];
       array_push($temp_array,$time_data);
       if(sizeof($document) > 0){
           $document[0]->time_data = $temp_array;
           $document[0]->save();
       }

    }

    public function createRecord($ip,$url){
        $database = new Keyboard_time();
        $database->ip = $ip;
        $database->url = $url;
        $database->time_data = [];
        $database->save();
    }

}
