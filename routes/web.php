<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\TaskController::class,'index'])->name('home');

Route::resource('task', App\Http\Controllers\TaskController::class);
