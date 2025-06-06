@extends('layout')

@section('content')

<h1>Issued Books</h1>
<a href="{{ route('issues.create') }}">Issue New Book</a>
<table border="1">
<tr>
    <th>Book</th>
    <th>Member</th>
    <th>Issue Date</th>
    <th>Return Date</th>
    <th>Action</th>
</tr>
@foreach($issues as $issue)
<tr>
    <td>{{ $issue->book->title }}</td>
    <td>{{ $issue->member->name }}</td>
    <td>{{ $issue->issue_date }}</td>
    <td>{{ $issue->return_date ?? 'Not returned' }}</td>
    <td>
        @if(!$issue->return_date)
        <a href="{{ route('issues.return', $issue->id) }}">Mark as Returned</a>
        @else
        Returned
        @endif
    </td>
</tr>
@endforeach
</table>
@endsection