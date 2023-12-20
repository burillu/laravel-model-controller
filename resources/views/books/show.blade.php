@extends('layouts.app')

@section('title', 'Book Details')

@section('content')

    <div class="container">
        <div class="row gy-4">

            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <a href="{{ route('books') }}" class="btn btn-primary">Back to Books</a>
                    </div>
                </div>
            </div>
            <div class="col p-5">
                <h2>{{ $book->title }}</h2>


                <p class="mt-5">
                    {{ $book->plot }}
                </p>


            </div>

        </div>
    </div>


@endsection
