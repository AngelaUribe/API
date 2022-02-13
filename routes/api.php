<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show', 'destroy']);

Route::apiResource('v1/users', App\Http\Controllers\Api\V1\UserController::class)
->only(['index','show', 'destroy']);
