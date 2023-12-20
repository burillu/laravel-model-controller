<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        //$movies = Movie::all();
        $movies = DB::table('movies')->orderBy("vote", "desc")->get();
        //dd($movies);
        return view("movies.index", compact("movies"));
    }
    public function show($id)
    {
        if ($id >= 0 && $id <= count(Movie::all())) {
            # code...
            $movie = Movie::findOrFail($id);
            return view("movies.show", compact("movie"));
        }
        abort(404);

    }
    public function create()
    {
        $message = "Hello create";
        dd($message);
        return view("movies.create", compact("message"));
    }
}
