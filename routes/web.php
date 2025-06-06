<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{id}/delete', [BookController::class, 'destroy'])->name('books.destroy');




Route::get('/issues', [IssueController::class, 'index'])->name('issues.index');
Route::get('/issues/create', [IssueController::class, 'create'])->name('issues.create');
Route::post('/issues/store', [IssueController::class, 'store'])->name('issues.store');
Route::get('/issues/{id}/return', [IssueController::class, 'returnBook'])->name('issues.return');



Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
Route::post('/members/store', [MemberController::class, 'store'])->name('members.store');
Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::post('/members/{id}/update', [MemberController::class, 'update'])->name('members.update');
Route::get('/members/{id}/delete', [MemberController::class, 'destroy'])->name('members.destroy');

