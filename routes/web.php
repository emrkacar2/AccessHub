<?php

use App\Http\Controllers\OccupantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/signup" , function()
{
return view("signup");
});

Route::post('/signup', [OccupantController::class, 'signup'])->name('signup');
