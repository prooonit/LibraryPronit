@extends('layout')

@section('content')
    <h1>Edit Book</h1>
<form method="POST" action="{{ route('books.update', $book->id) }}">
    @csrf
    Title: <input type="text" name="title" value="{{ $book->title }}"><br>
    Author: <input type="text" name="author" value="{{ $book->author }}"><br>
    <label>
        <input type="checkbox" name="is_issued" value="1" {{ $book->is_issued ? 'checked' : '' }}> Issued
    </label><br>
    <button type="submit">Update</button>
</form>

 @endsection