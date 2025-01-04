<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');


// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{id}', 'show');
//     Route::get('/jobs/{id}/edit', 'edit');
//     Route::post('/jobs', 'store');
//     Route::patch('/jobs/{id}', 'update');
//     Route::delete('/jobs/{id}', 'destroy');
// });

Route::resource('jobs', JobController::class);

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});

Route::view('/contact', 'contact');
