@extends('layout')

@section('content')
    <h1>Members List</h1>
<a href="{{ route('members.create') }}">Add Member</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
</tr>
@foreach($members as $member)
<tr>
    <td>{{ $member->name }}</td>
    <td>{{ $member->email }}</td>
    <td>
        <a href="{{ route('members.edit', $member->id) }}">Edit</a> |
        <a href="{{ route('members.destroy', $member->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
@endforeach
</table>
@endsection