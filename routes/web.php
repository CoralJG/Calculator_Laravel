<?php

use Illuminate\Support\Facades\Route;


Route::get('/add/{num1}/{num2}', [App\Http\Controllers\HomeController::class,'add'])->name('add');
//http://127.0.0.1:8000/add/2/2

Route::get('/subtract/{num1}/{num2}', [App\Http\Controllers\HomeController::class,'subtract'])->name('subtract');
//http://127.0.0.1:8000/subtract/2/2

Route::get('/multiply/{num1}/{num2}', [App\Http\Controllers\HomeController::class,'multiply'])->name('multiply');
//http://127.0.0.1:8000/multiply/2/2

Route::get('/divide/{num1}/{num2}', [App\Http\Controllers\HomeController::class,'divide'])->name('divide');
//http://127.0.0.1:8000/divide/2/2
