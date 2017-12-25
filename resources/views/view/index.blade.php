@extends('layouts.master')
@section('title')
        <h1>MOVIES</h1>
@endsection

@section('content')
    <h1>MOVIES</h1>
        @foreach($movies as $movie)
            <div class="jumbotron">
                <a href="/movies/{{ $movie->id }}"><h1 class="display-3">{{ $movie->title }}</h1></a>
                <p class="lead">{{$movie->storyline}}</p>
            </div>
        @endforeach
@endsection