<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{


    public function index(){
        //Get the current logged in users id so we can see what is in there basket
        $userId = Auth::id();
        //Set the session
        \Cart::session($userId);
        //Get the entire contents of the basket
        $Products = \Cart::getContent();
        //Pass the variable to the view under the name of products
        return view('basket',['products'=>$Products]);

    }


    public function delete(Request $res){

        //Get the current logged in users id so we can see what is in there basket
        $userId = Auth::id();

        //Set the session get the row id from the request and then remove it
        \Cart::session($userId)->remove($res->Product_id);

        $Products = \Cart::getContent();
        return view('basket',['products'=>$Products]);

    }



}
