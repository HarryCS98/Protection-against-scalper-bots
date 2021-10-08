<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bannedips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Object_;


class BannedipsController extends Controller
{
    public function index($ip)
    {
        /*Take ip from our api and then add it to the Bannedips table our middleware will then ban the user on the next http request*/
        $BannedIps_table = new Bannedips;
        $BannedIps_table->ips =$ip;
        $BannedIps_table->Reason = "Time to small between character inputs";
        $BannedIps_table->save();
    }

}
