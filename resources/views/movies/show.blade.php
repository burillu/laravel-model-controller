@extends('layouts.app')

@section('title', 'Movies - Details')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <a href="{{ route('movies') }}" class="btn btn-primary">Back to Movie List</a>
                    </div>
                </div>
            </div>
            <div class="col p-5">
                <h2>{{ $movie->title }}</h2>
                <h4 class="fstl-italic"> Original Name: {{ $movie->original_title }} </h4>
                <span class="fw-bold"> Vote : {{ $movie->vote }} </span>
                <p class="mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis repudiandae error consequuntur
                    dolorem aperiam molestias, voluptas magnam quidem! Inventore autem aliquam amet obcaecati quaerat, a
                    nemo deserunt? Quas qui ipsum eligendi quis quibusdam error perferendis ducimus, dolore animi dicta
                    exercitationem corporis ea? Labore recusandae velit incidunt at, facilis impedit ea?
                </p>


            </div>

        </div>
    </div>


@endsection
