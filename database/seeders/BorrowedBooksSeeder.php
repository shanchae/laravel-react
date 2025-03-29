<?php

namespace Database\Seeders;

use App\Models\BorrowedBooks;
use Illuminate\Database\Seeder;

class BorrowedBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $borrowedBooks = [
            [
                'book_id' => 1,
                'borrower_id' => 1,
                'borrowed_at' => '2021-01-01',
                'returned_at' => '2021-01-15',
            ],
            [
                'book_id' => 2,
                'borrower_id' => 2,
                'borrowed_at' => '2021-02-01',
                'returned_at' => '2021-02-15',
            ],
            [
                'book_id' => 3,
                'borrower_id' => 3,
                'borrowed_at' => '2021-03-01',
                'returned_at' => '2021-03-15',
            ],
            [
                'book_id' => 4,
                'borrower_id' => 4,
                'borrowed_at' => '2021-04-01',
                'returned_at' => '2021-04-15',
            ],
            [
                'book_id' => 5,
                'borrower_id' => 5,
                'borrowed_at' => '2021-05-01',
                'returned_at' => '2021-05-15',
            ],
            [
                'book_id' => 6,
                'borrower_id' => 6,
                'borrowed_at' => '2021-06-01',
                'returned_at' => '2021-06-15',
            ],
            [
                'book_id' => 7,
                'borrower_id' => 7,
                'borrowed_at' => '2021-07-01',
                'returned_at' => '2021-07-15',
            ],
            [
                'book_id' => 8,
                'borrower_id' => 8,
                'borrowed_at' => '2021-08-01',
                'returned_at' => '2021-08-15',
            ],
            [
                'book_id' => 9,
                'borrower_id' => 9,
                'borrowed_at' => '2021-09-01',
                'returned_at' => '2021-09-15',
            ],
        ];

        foreach ($borrowedBooks as $borrowedBook) {
            BorrowedBooks::create($borrowedBook);
        }
    }
}
