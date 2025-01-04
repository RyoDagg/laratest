<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
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

Route::view('/contact', 'contact');
