<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});



// Book qpi routes
// Route::get('/api/books', [BookController::class, 'index'])->name('books.index');


// Book routes

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
