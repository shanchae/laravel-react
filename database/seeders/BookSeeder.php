<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $books = [
                [
                    'title' => 'The Great Gatsby',
                    'author' => 'F. Scott Fitzgerald',
                    'status' => 'available',
                ],
                [
                    'title' => 'To Kill a Mockingbird',
                    'author' => 'Harper Lee',
                    'status' => 'available',
                ],
                [
                    'title' => '1984',
                    'author' => 'George Orwell',
                    'status' => 'available',
                ],
                [
                    'title' => 'Pride and Prejudice',
                    'author' => 'Jane Austen',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Catcher in the Rye',
                    'author' => 'J.D. Salinger',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Hobbit',
                    'author' => 'J.R.R. Tolkien',
                    'status' => 'available',
                ],
                [
                    'title' => 'Fahrenheit 451',
                    'author' => 'Ray Bradbury',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Lord of the Rings',
                    'author' => 'J.R.R. Tolkien',
                    'status' => 'available',
                ],
                [
                    'title' => 'Animal Farm',
                    'author' => 'George Orwell',
                    'status' => 'available',
                ],
                [
                    'title' => 'Brave New World',
                    'author' => 'Aldous Huxley',
                    'status' => 'available',
                ],
                [
                    'title' =>  'The Picture of Dorian Gray',
                    'author' => 'Oscar Wilde',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Little Prince',
                    'author' => 'Antoine de Saint-Exupéry',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Odyssey',
                    'author' => 'Homer',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Brothers Karamazov',
                    'author' => 'Fyodor Dostoevsky',
                    'status' => 'available',
                ],
                [
                    'title' => 'The Stranger',
                    'author' => 'Albert Camus',
                    'status' => 'available',
                ]
            ];
    
            foreach ($books as $book) {
                Book::create($book);
            }       
    }
}
