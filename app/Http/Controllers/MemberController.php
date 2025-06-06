<?php

namespace App\Http\Controllers;

// Import necessary models
use App\Models\Issue;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Display a list of all registered members
    public function index()
    {
        // Fetch all members from the database
        $members = Member::all();

        // Return the 'members.index' view and pass the members data
        return view('members.index', compact('members'));
    }

    // Show the form to register a new member
    public function create()
    {
        // Return the 'members.create' view (form to add new member)
        return view('members.create');
    }

    // Store the newly created member in the database
    public function store(Request $request)
    {
        // Create a new member using form data
        Member::create($request->all());

        // Redirect to the member list after saving
        return redirect()->route('members.index');
    }

    // Show the form to edit an existing member's info
    public function edit($id)
    {
        // Find the member by ID or show 404 if not found
        $member = Member::findOrFail($id);

        // Return the 'members.edit' view with the member data
        return view('members.edit', compact('member'));
    }

    // Update the member info in the database
    public function update(Request $request, $id)
    {
        // Find the member by ID
        $member = Member::findOrFail($id);

        // Update the member record with submitted data
        $member->update($request->all());

        // Redirect to the member list after update
        return redirect()->route('members.index');
    }

    // Delete a member from the database
    public function destroy($id)
    {
        // Delete the member by ID
        Member::destroy($id);

        // Redirect back to the member list
        return redirect()->route('members.index');
    }
}
