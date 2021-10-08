<?php

use App\Http\Controllers\APIcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/product', function () {
    return view('product');
});


/*Route::get('/test', function () {
    return view('layouts.Product_list');
});*/




//Routes to show a list off all products in a category
Route::get('/category/ram',[Products\RamController::class,'index'])->name('RAM');
Route::get('/category/AirCoolers',[Products\AirCoolerController::class,'index'])->name('Aircoolers');
Route::get('/category/Chairs',[Products\ChairController::class,'index'])->name('Chairs');
Route::get('/category/CPU',[Products\CPUController::class,'index'])->name('CPU');
Route::get('/category/GPU',[Products\GPUController::class,'index'])->name('GPU');
Route::get('/category/HardDrives',[Products\HDDController::class,'index'])->name('HDD');
Route::get('/category/Keyboards',[Products\KeyboardController::class,'index'])->name('Keyboards');
Route::get('/category/Mice',[Products\MiceController::class,'index'])->name('Mice');
Route::get('/category/Motherboards',[Products\MotherboardController::class,'index'])->name('Motherboards');
Route::get('/category/SSD',[Products\SSDController::class,'index'])->name('SSD');
Route::get('/category/WaterCoolers',[Products\WaterCoolerController::class,'index'])->name('Watercoolers');
Route::get('/category/Water-Cooler-Fittings',[Products\WaterCoolerFittingController::class,'index'])->name('WaterCoolingFittings');
Route::get('/category/Water-Cooler-Tubes',[Products\WaterCoolerTubeController::class,'index'])->name('WaterCoolingTubes');

//Routes to show the product page
Route::get('/category/ram/{id}',[Products\RamController::class,'show']);
Route::get('/category/AirCooler/{id}',[Products\AirCoolerController::class,'show']);
Route::get('/category/Chair/{id}',[Products\ChairController::class,'show']);
Route::get('/category/CPU/{id}',[Products\CPUController::class,'show']);
Route::get('/category/GPU/{id}',[Products\GPUController::class,'show']);
Route::get('/category/HardDrive/{id}',[Products\HDDController::class,'show']);
Route::get('/category/Keyboard/{id}',[Products\KeyboardController::class,'show']);
Route::get('/category/Mice/{id}',[Products\MiceController::class,'show']);
Route::get('/category/Motherboard/{id}',[Products\MotherboardController::class,'show']);
Route::get('/category/SSD/{id}',[Products\SSDController::class,'show']);
Route::get('/category/WaterCooler/{id}',[Products\WaterCoolerController::class,'show']);
Route::get('/category/Water-Cooler-Fitting/{id}',[Products\WaterCoolerFittingController::class,'show']);
Route::get('/category/Water-Cooler-Tube/{id}',[Products\WaterCoolerTubeController::class,'show']);


//Routes to add stuff to add products from each page into your basket
Route::post('/category/ram/{id}',[Products\RamController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/AirCooler/{id}',[Products\AirCoolerController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Chair/{id}',[Products\ChairController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/CPU/{id}',[Products\CPUController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/GPU/{id}',[Products\GPUController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/HardDrive/{id}',[Products\HDDController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Keyboard/{id}',[Products\KeyboardController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Mice/{id}',[Products\MiceController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Motherboard/{id}',[Products\MotherboardController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/SSD/{id}',[Products\SSDController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/WaterCooler/{id}',[Products\WaterCoolerController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Water-Cooler-Fitting/{id}',[Products\WaterCoolerFittingController::class,'addtobasket'])->middleware(['auth']);
Route::post('/category/Water-Cooler-Tube/{id}',[Products\WaterCoolerTubeController::class,'addtobasket'])->middleware(['auth']);

Route::get('/basket',[\App\Http\Controllers\BasketController::class,'index'])->name('basket')->middleware(['auth']);
Route::post('/basket',[\App\Http\Controllers\BasketController::class,'delete'])->middleware(['auth']);

/*Admin Pages*/

Route::get('/admin',[App\Http\Controllers\Admin\Admincontroller::class,'index']);



/*Debug pages*/

Route::get('/test/{id}',[APIcontroller::class,'test']);

Route::get('/keyboardtest',[APIcontroller::class,'keyboardtest'])->name('banned');

Route::get('/',[\App\Http\Controllers\WelcomeController::class,'index'])->name('home');


Route::get('/checkout',[APIcontroller::class,'checkout'])->name('Checkout');

Route::get('/success',[App\Http\Controllers\AntiBot\SuccessController::class,'index'])->name('success')->middleware(['keyboardcheck']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



