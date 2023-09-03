<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);

Route::get('/', [AuthorController::class, 'index']);
Route::post('/', [AuthorController::class, 'insert'])->name('authors.insert');
Route::delete('/authors/delete/{id}', [AuthorController::class, 'delete'])->name('authors.delete');

Route::post('/books', [BookController::class, 'insert'])->name('books.insert');




