<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Index
Route::get('/jobs', [JobController::class, 'index']);

// Create
Route::get('/jobs/create', [JobController::class, 'create']);

// Show
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Store
Route::post('/jobs', [JobController::class, 'store']);

// Edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update
Route::patch('/jobs/{job}', [JobController::class, 'update']);

// Destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::view('/contact', 'contact');
