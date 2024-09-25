<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/project', [AboutController::class, 'about']);