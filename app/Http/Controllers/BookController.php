<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show the list of all books
    public function index()
    {
        // Get all book records from the database
        $books = Book::all();

        // Return the 'books.index' view and pass the books data to it
        return view('books.index', compact('books'));
    }

    // Show the form to create a new book
    public function create()
    {
        // Return the 'books.create' view (form to add new book)
        return view('books.create');
    }

    // Handle the form submission and save the new book to the database
    public function store(Request $request)
    {
        // Create a new book record using the submitted form data
        Book::create($request->all());

        // Redirect to the list of books after successful creation
        return redirect()->route('books.index');
    }

    // Show the form to edit an existing book
    public function edit($id)
    {
        // Find the book by ID, or throw a 404 error if not found
        $book = Book::findOrFail($id);

        // Return the 'books.edit' view and pass the book data to it
        return view('books.edit', compact('book'));
    }

    // Handle the form submission to update a book
    public function update(Request $request, $id)
    {
        // Find the book by ID
        $book = Book::findOrFail($id);

        // Update the book details using the form data
        $book->update($request->all());

        // Redirect to the list of books after successful update
        return redirect()->route('books.index');
    }

    // Delete a book by its ID
    public function destroy($id)
    {
        // Delete the book record from the database
        Book::destroy($id);

        // Redirect to the list of books after deletion
        return redirect()->route('books.index');
    }
}
