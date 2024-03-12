<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedsController;
use App\Http\Controllers\PagesController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[PagesController::class, 'register']);

Route::get('/profile',[PagesController::class,'profile']);

Route::get('/edit',[PagesController::class,'edit']);

Route::get('/create',[PagesController::class,'create']);

Route::get('/feeds',[PagesController::class,'feeds']);

