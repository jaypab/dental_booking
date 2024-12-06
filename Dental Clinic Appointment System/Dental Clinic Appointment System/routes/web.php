<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserpageController;



Route::get('/landingpage', function () { 
    return view('landingpage'); });

Route::post('/landingpage', [LandingpageController::class, 'landingpage'])->name('landingpage');

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');

Route::post('/signup', [SignupController::class, 'store']);

Route::get('/login', function () { 
    return view('login'); });

Route::post('/login', [LandingpageController::class, 'login'])->name('login');

Route::get('/user', function () {
    return view('user'); });

Route::post('/user', [UserpageController::class, 'user'])->name('user');

