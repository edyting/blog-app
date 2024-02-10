<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditblogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/homepage', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class, 'register']);

Route::get('/profile',[ProfileController::class,'profile']);

Route::get('/edit',[EditblogController::class,'edit']);

Route::get('/create',[CreateController::class,'create']);

