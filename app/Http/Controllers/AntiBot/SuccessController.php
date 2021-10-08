<?php

namespace App\Http\Controllers\AntiBot;

use App\Models\Mongo\Keyboard_time;
use App\Models\Products\AirCooler;
use App\Http\Controllers\Controller;
use App\Models\Products\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Object_;


class SuccessController extends Controller
{
    public function index()
    {
      return(view('AntiBot.SuccessfulPage'));
    }
}
