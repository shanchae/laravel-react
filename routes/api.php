<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::apiResource('borrowed-books', BorrowedBookController::class);
Route::get('borrowed-books/user/{user}', [BorrowedBookController::class, 'borrowedBooksByUser'])->name('borrowed-books.user');
Route::get('borrowed-books/book/{book}', [BorrowedBookController::class, 'borrowedBooksByBook'])->name('borrowed-books.book');

Route::apiResource('books', BookController::class);
Route::get('books/borrowed', [BookController::class, 'borrowed'])->name('books.borrowed');
Route::get('books/available', [BookController::class, 'available'])->name('books.available');

Route::apiResource('users', UserController::class);

