<?php

 use App\Http\Controllers\BookController; // importante importarlo
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//  \\ Route::get('/', [PageController]); per far importare la riga contoller 
// rotte generali
Route::get('/', [PageController::class, 'home'])-> name('home');
Route::get('/about', [PageController::class, 'about'])-> name('about');
// rotte per risorsa del sito
Route::get('/books',            [BookController::class, 'index'])-> name('books.index');
Route::get('/books/create',     [BookController::class, 'create'])-> name('books.create');
Route::get('/books/{id}',       [BookController::class, 'show'])-> name('books.show'); // mettere le parti con id alla fine delle routes
Route::get('/books/{id}/edit',  [BookController::class, 'edit'])-> name('books.edit');