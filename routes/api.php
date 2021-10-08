<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Testing api routes for showing logged data in graph format
Route::get('/test1',[\App\Http\Controllers\APIcontroller::class,'index']);

Route::get('/test1/{id}',[\App\Http\Controllers\APIcontroller::class,'searchbyip']);




//Mouse Movement logging API
Route::post('/mmdocument/create/{ip}/{url}',[\App\Http\Controllers\APIcontroller::class,'createRecord']);

Route::post('/mousemovement/add',[\App\Http\Controllers\APIcontroller::class,'logMouseMovement']);




//TODO Should protect using an crsf token but not within the scope of this research will add later
Route::post('/bannedip/{ip}',[\App\Http\Controllers\BannedipsController::class,'index']);

Route::post('/keyboard_data/{ip}/{url}/{time_data}',[\App\Http\Controllers\AntiBot\KeyboardtimeController::class,'index']);

/*Route::post('/keyboard_data/',[\App\Http\Controllers\AntiBot\KeyboardtimeController::class,'index']);*/

Route::post('/keyboardcreate/{ip}/{url}',[\App\Http\Controllers\AntiBot\KeyboardtimeController::class,'createRecord']);


