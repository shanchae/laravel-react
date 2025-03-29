<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;

class BorrowedBookController extends Controller
{
    public function index()
    {
        $borrowedBooks = BorrowedBook::with(['book', 'borrower'])->get();
        return response()->json($borrowedBooks, 200);
    }

    public function show($id)
    {
        return BorrowedBook::findOrFail($id);

    }

    public function store(Request $request)
    {
        // Validate request input
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'borrower_id' => 'required|exists:users,id',
            'borrowed_at' => 'nullable|date',
        ]);

        // Create borrowed book record
        $borrowedBook = BorrowedBook::create([
            'book_id' => $validated['book_id'],
            'borrower_id' => $validated['borrower_id'],
            'borrowed_at' => $validated['borrowed_at'] ?? now(),
            'returned_at' => null,
        ]);

        // Update book status to 'borrowed'
        $book = Book::find($validated['book_id']);
        if ($book) {
            $book->status = 'borrowed';
            $book->save();
        }

        return response()->json([
            'message' => 'Book successfully borrowed',
            'data' => $borrowedBook
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $borrowedBook = BorrowedBook::findOrFail($id);
        $borrowedBook->update($request->all());

        if ($request->has('returned_at')) {
            // Assuming you want to set the status to 'available' when a book is returned
            $borrowedBook->book->status = 'available';
            $borrowedBook->book->save();
        }
        return response()->json($borrowedBook, 200);
    }

    public function destroy($id)
    {
        $borrowedBook = BorrowedBook::findOrFail($id);
        $borrowedBook->delete();
        return response()->json(null, 204);
    }

    public function borrowedBooksByUser($userId)
    {
        return BorrowedBook::where('borrower_id', $userId)->get();
    }

    public function borrowedBooksByBook($bookId)
    {
        return BorrowedBook::where('book_id', $bookId)->get();
    }

}
