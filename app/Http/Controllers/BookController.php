<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view("books.index", compact("books"));
    }
    public function show($id)
    {
        if ($id >= 0 && $id <= count(Book::all())) {
            $book = Book::findOrFail($id);
            return view("books.show", compact("book"));
        }
        abort(404);
    }
}
