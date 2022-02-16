<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [\App\Http\Controllers\api\AuthController::class, 'register']);
Route::apiResource('students', \App\Http\Controllers\api\StudentController::class)->middleware(['auth:sanctum']);

