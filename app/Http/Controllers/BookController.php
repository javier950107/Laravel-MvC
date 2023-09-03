<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $authors = Author::all();

        return view('books.index', ['books' => $books , 'authors' => $authors]  );
    }

    public function insert(Request $request){
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $book = new Book;
        $book->title = $request->input('title');
        $book->author_id = $request->input('author');
        $book->save();

        return redirect()->back();
    }
}
