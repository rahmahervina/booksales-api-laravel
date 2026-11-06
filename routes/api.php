<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;

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
| Protected Routes (Memerlukan Autentikasi / auth:sanctum)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum'])->group(function () {

    // --- AUTHOR & GENRE (Hanya Admin) ---
    Route::post('/author', [AuthorController::class, 'store']);
    Route::put('/author/{id}', [AuthorController::class, 'update']);
    Route::delete('/author/{id}', [AuthorController::class, 'destroy']);

    Route::post('/genre', [GenreController::class, 'store']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

    // --- TRANSAKSI: Customer (Create, Update, Show) ---
    Route::post('/transaction', [TransactionController::class, 'store']);        // Create
    Route::put('/transaction/{id}', [TransactionController::class, 'update']);   // Update
    Route::get('/transaction/{id}', [TransactionController::class, 'show']);     // Show per ID

    // --- TRANSAKSI: Admin (Read All & Destroy) ---
    Route::get('/transaction', [TransactionController::class, 'index']);         // Read All
    Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']); // Destroy

});