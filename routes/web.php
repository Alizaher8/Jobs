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
    Route::get('/job/create','create')->middleware('auth');
    Route::post('/job','store')->middleware('auth');
    Route::get('/job/{job}/edit','edit')->middleware('auth','can:edit,job');
    Route::patch('/job/{job}','update')->middleware('auth');
    Route::delete('/job/{job}','destroy')
       ->middleware('auth')
       ->can('edit','job');
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
