<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::group('/books', function () {
    Route::get('/', [LibraryController::class, 'index']);
    Route::get('/create', [LibraryController::class, 'create']);
    Route::post('/create', [LibraryController::class, 'store']);
    Route::get('/{book}/edit', [LibraryController::class, 'edit']);
    Route::post('/{book}/edit', [LibraryController::class, 'update']);
    Route::get('/{book}/delete', [LibraryController::class, 'destroy']);
});
