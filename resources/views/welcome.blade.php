@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($movies as $movie)
                <div class="card ms-card text-center">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $movie->title }}</h4>
                        <hr>
                        <p class="card-text"><em>{{ $movie->original_title }}</em></p>
                        <hr>
                        <p>Voto: <span class="vote-text">{{ $movie->vote }}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
