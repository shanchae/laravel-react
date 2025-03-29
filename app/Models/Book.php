<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'status',
    ];

    public function borrowedBy()
    {
        return $this->belongsToMany(User::class, 'borrowed_books')
            ->withTimestamps();
    }
}
