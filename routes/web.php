<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(JobController::class)->group(function () {

    Route::get('/jobs','index');
    Route::get('/job/create','create');
    Route::post('/job','store');
    Route::get('/job/{job}/edit','edit');
    Route::patch('/job/{job}','update');
    Route::delete('/job/{job}','destroy');
    Route::get('/job_item/{job}','show');

});

Route::get('/login',[LoginController::class,'create']);
Route::post('/login/create',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/register/create',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
