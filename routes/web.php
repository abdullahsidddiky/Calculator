<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  //created new home controller

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home',[HomeController::class,'home'])->name('home');   // welcome page from home controller
Route::POST('',[HomeController::class,'calculate'])->name('calculate');   //accepting input from form in blade.php file
