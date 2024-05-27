<?php

use App\Http\Controllers\OccupantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/signup" , function()
{
return view("signup");
});

Route::post('/signup', [OccupantController::class, 'signup'])->name('signup');

Route::get('/success', function () {
    return view('success');
});

Route::get("/signin",function(){
  return view("signin");
});
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::get('/successsignin', function () {
  return view('successsignin');
});

