@extends('layout')

@section('content')
    <h1>Issue New Book</h1>
<form method="POST" action="{{ route('issues.store') }}">
    @csrf
    <label>Book:</label>
    <select name="book_id">
        @foreach($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
    </select><br><br>

    <label>Member:</label>
    <select name="member_id">
        @foreach($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }}</option>
        @endforeach
    </select><br><br>

    <label>Issue Date:</label>
    <input type="date" name="issue_date" value="{{ date('Y-m-d') }}"><br><br>

    <button type="submit">Issue Book</button>
</form>

@endsection