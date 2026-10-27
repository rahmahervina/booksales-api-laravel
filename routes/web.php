<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/author', [AuthorController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);