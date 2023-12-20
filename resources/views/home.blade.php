@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <h2>Our Suggest for today</h2>
        <di class="row justify-content-evenly">

            <div class="col-4">
                <h4 class="text-center">Movie</h4>
                <div class="card">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <a href="{{ route('movies') }}" class="btn btn-primary">All Movie</a>

                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-success">About this Movie</a>

                    </div>
                </div>
            </div>
            {{-- books --}}
            <div class="col-4">
                <h4 class="text-center">Book</h4>
                <div class="card">
                    <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <a href="{{ route('books') }}" class="btn btn-primary">All Books</a>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-success">About this Book</a>
                    </div>
                </div>
            </div>
        </di>
    </div>


@endsection
