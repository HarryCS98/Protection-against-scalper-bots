<?php

namespace App\Http\Controllers;

use App\Models\Mongo\MousePosition;
use App\Models\Products\test;
use Illuminate\Http\Request;


class APIcontroller extends Controller
{
    public function index()
    {
        return MousePosition::all();
    }

    public function keyboardtest(){

        return view('keyboardtest');

    }


    public function test($ip)
    {

        $amount = MousePosition::where('ip', $ip)->count();;

        return view('test',['amount' => $amount]);
    }


    public function checkout(){
        return view('Checkout.Checkout');
    }


    public function searchbyip($ip){
        return MousePosition::where('ip', $ip)->orderBy("updated_at","DESC")->get();
    }

    public function createRecord($ip, $url){

       $database = new MousePosition;
        $database->ip = $ip;
        $database->url = $url;
        $database->xpos = [];
        $database->ypos = [];
        $database->save();

    }


    public function logMouseMovement(Request $request){

        $database = new MousePosition;
        $document = $database::query()->where('ip',$request->input('ip'))->where('url',$request->input('url'))->latest()->limit(1)->get();
        $document[0]->xpos = $request->input('xpos');
        $document[0]->ypos = $request->input('ypos');
        $document[0]->push();

    }


    public function getips(){

        return MousePosition::distinct('ip')->get();

    }



}
