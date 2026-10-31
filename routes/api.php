<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// Author Routes
Route::get('/author', [AuthorController::class, 'index']);
Route::post('/author', [AuthorController::class, 'store']);

// Genre Routes
Route::get('/genre', [GenreController::class, 'index']);
Route::post('/genre', [GenreController::class, 'store']);