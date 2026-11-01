<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Public Routes (Dapat diakses semua orang tanpa autentikasi)
|--------------------------------------------------------------------------
*/
// Read All & Show Author
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/author/{id}', [AuthorController::class, 'show']);

// Read All & Show Genre
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);


/*
|--------------------------------------------------------------------------
| Admin / Protected Routes (Hanya dapat diakses Admin / Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum'])->group(function () {
    // Create, Update, Destroy Author (Hanya Admin)
    Route::post('/author', [AuthorController::class, 'store']);
    Route::put('/author/{id}', [AuthorController::class, 'update']);
    Route::delete('/author/{id}', [AuthorController::class, 'destroy']);

    // Create, Update, Destroy Genre (Hanya Admin)
    Route::post('/genre', [GenreController::class, 'store']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);
});