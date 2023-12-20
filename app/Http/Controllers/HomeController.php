<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $movie = $movies[rand(0, count($movies) - 1)];
        $book = Book::all()[rand(0, count(Book::all()) - 1)];
        return view("home", compact("movie", "book"));
    }
}
