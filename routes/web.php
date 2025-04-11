<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'books'], function () {
    Route::get('/', [LibraryController::class, 'index']);
    Route::get('/create', [LibraryController::class, 'create']);
    Route::post('/', [LibraryController::class, 'store']);
    Route::get('/{book}/edit', [LibraryController::class, 'edit']);
    Route::put('/{book}', [LibraryController::class, 'update']);
    Route::delete('/{book}', [LibraryController::class, 'destroy']);
});
