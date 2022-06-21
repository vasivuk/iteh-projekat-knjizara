<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //Show all books
    public function index() {
        return Book::all();
    }

    //Show specific book
    public function show($id) {
        return Book::find($id);
    }

    //Create a book
    public function store(Request $request) {
        $formFields = $request->validate([
            'category_id' => 'required',
            'author_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $book = Book::create($formFields);
    }
}
