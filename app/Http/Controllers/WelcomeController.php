<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sub_category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    public function index(){
        
        return view('welcome');
    }





}
