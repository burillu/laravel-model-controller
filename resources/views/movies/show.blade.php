@extends('layouts.app')

@section('title', 'Movies - Details')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <a href="{{ route('movies') }}" class="btn btn-primary">Back to Movie List</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
