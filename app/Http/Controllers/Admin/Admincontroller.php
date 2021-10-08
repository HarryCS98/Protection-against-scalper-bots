<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products\AirCooler;
use App\Http\Controllers\Controller;
use App\Models\Products\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Object_;


class Admincontroller extends Controller
{
    public function index()
    {
        $ips = test::distinct('ip')->get();

        for($i = 0; $i < sizeof($ips); $i++){
            $ips[$i] = str_replace(array('"',"[","]"),"",$ips[$i]);
        }

        return view('Admin.data',['ips' => $ips]);
    }

}
