<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');

Route::get('/register', [RegisteredUserController::class, 'create']);
