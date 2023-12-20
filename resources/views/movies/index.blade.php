@extends('layouts.app')

@section('title', 'Movies')

@section('content')


    <div class="container">
        <div class="row gy-4">
            @foreach ($movies as $item)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <a href="{{ route('movies.show', $item->id) }}" class="btn btn-primary">Movie Deails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
