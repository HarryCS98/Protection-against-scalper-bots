<?php

namespace App\Http\Controllers\Products;

use App\Models\Products\ram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\ValueObjects\Cart\ItemObject;

class RamController extends Controller
{

    public function index(){
        $products = ram::all();
        return view('Products.RAM',['products'=>$products]);
    }

    public function test(){
        return view('test');;
    }


    public function show($id){
        $product = ram::query()->find($id);
        return view('Products.RAM_item',['product'=>$product]);
    }


    public function addtobasket(Request $res){

            // Get the specific product that is being added to the basket we can access this items data from here (price description etc)
            $Product = ram::query()->find($res->Product_id);

            //Get the time and date we are going to use this to create a unique row id for the product
            $temp_date = date("h:i:sa") . date("Y/m/d");

            //We are going to clean the time and date up so that is only numbers
            $date = preg_replace("/[^0-9]/", "", $temp_date);

            //we are going to create a random number between these to numbers this should generate a random one but just to make sure
            $randomNumber = rand(0, 100000);

            //we add our cleaned up time and date in to our random number to give us a unique row id this cant be the product id else it will mess up
            //If you tried to add the same product but with a different price in the future
            $rowId = $date . $randomNumber;

            //Get the id of the current logged in user
            $userId = Auth::id();

            \Cart::session($userId)->add(array(

                'id' => $rowId,
                'name' => $Product->Product_Name,
                'price' => $Product->Price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $Product
            ));

        return view('Products.RAM_item',['product'=>$Product]);
    }


}
