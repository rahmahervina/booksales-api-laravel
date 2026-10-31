<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::apiResource('author', AuthorController::class);
Route::apiResource('genre', GenreController::class);