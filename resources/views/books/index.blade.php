<!@extends('layout')

@section('content')

<div>
    <h1>Books List</h1>
<a href="{{ route('books.create') }}">Add Book</a>

<table border="1">
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Status</th>
    <th>Action</th>
</tr>
@foreach($books as $book)
<tr>
    <td>{{ $book->title }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->is_issued ? 'Issued' : 'Available' }}</td>
    <td>
        <a href="{{ route('books.edit', $book->id) }}">Edit</a> |
        <a href="{{ route('books.destroy', $book->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
@endforeach
</table>

</div>
@endsection