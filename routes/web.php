<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')-> group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::prefix('admin')-> group(function(){
    Route::get('/villageResidents',[App\Http\Controllers\Admin\VillageResidentsController::class, 'villageIndex']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


