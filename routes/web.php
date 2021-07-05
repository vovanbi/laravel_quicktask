<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\TaskController::class,'index'])->name('home');


Route::prefix('task')->group(function() {
   Route::get('/add',[App\Http\Controllers\TaskController::class,'getTask'])->name('get.task');
   Route::post('/add',[App\Http\Controllers\TaskController::class,'postTask']);
   Route::get('/update/{id}',[App\Http\Controllers\TaskController::class,'editTask'])->name('edit');
   Route::post('/update/{id}',[App\Http\Controllers\TaskController::class,'updateTask']);
   Route::get('/delete/{id}',[App\Http\Controllers\TaskController::class,'action'])->name('action.delete');
});

