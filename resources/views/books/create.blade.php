@extends('layout')

 @section('content')
<div>
    <h1>Add New Book</h1>
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    Title: <input type="text" name="title"><br>
    Author: <input type="text" name="author"><br>
    <button type="submit">Save</button>
</form>
</div>

 @endsection