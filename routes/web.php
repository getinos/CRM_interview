<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});


//login page routes
Route::view('login','login');
Route::post('login',[loginController::class,'login']);
Route::post('signup',[signupController::class,'signup']);
