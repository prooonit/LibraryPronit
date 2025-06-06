<?php

namespace App\Http\Controllers;

// Importing the necessary Models
use App\Models\Issue;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    // Display a list of all issued books
    public function index()
    {
        // Fetch all issue records with their related book and member details
        $issues = Issue::with(['book', 'member'])->get();

        // Return the 'issues.index' view and pass the issues data
        return view('issues.index', compact('issues'));
    }

    // Show the form to issue a new book
    public function create()
    {
        // Get all books that are not currently issued
        $books = Book::where('is_issued', false)->get();

        // Get all registered members
        $members = Member::all();

        // Return the 'issues.create' view with books and members
        return view('issues.create', compact('books', 'members'));
    }

    // Store the issued book information in the database
    public function store(Request $request)
    {
        // Create a new issue record with the submitted data
        Issue::create($request->all());

        // Update the corresponding book's status to 'issued'
        $book = Book::find($request->book_id);
        $book->is_issued = true;
        $book->save();

        // Redirect to the list of issued books
        return redirect()->route('issues.index');
    }

    // Handle the return of an issued book
    public function returnBook($id)
    {
        // Find the issue record by ID
        $issue = Issue::findOrFail($id);

        // Set the return date to the current time
        $issue->return_date = now();
        $issue->save();

        // Update the book's status to 'not issued' (available)
        $book = Book::find($issue->book_id);
        $book->is_issued = false;
        $book->save();

        // Redirect back to the issues list
        return redirect()->route('issues.index');
    }
}
