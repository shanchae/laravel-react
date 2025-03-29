<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedBooks extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowedBooksFactory> */
    use HasFactory;

    protected $fillable = [
        'book_id',
        'borrower_id',
        'borrowed_at',
        'returned_at',
    ];

    
}
