<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\UserController as UserV1;

//V1
Route::apiResource('v1/users', UserV1::class)
->only(['index','show', 'destroy']);
