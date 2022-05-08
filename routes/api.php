<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);


Route::post('token/generator', \App\Http\Controllers\TokenGeneratorController::class);