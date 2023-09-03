<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors ]);
    }

    public function insert(Request $request){
        $validator = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $author = new Author;
        $author->name = $request->input('name');
        $author->save();

        return redirect()->back();
    }

    public function delete($id){
        $author = Author::find($id);

        if(!$author){
            return redirect()->back()->with("Error", "Not found author");
        }

        $author->delete();
        return redirect()->back();
    }
}
