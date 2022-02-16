<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\UserController::class,'index']);
Route::get('/main', [App\Http\Controllers\UserController::class,'main']);
Route::get('/json', [App\Http\Controllers\UserController::class,'indexjson']);