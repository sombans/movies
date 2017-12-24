@extends('layouts.master')
@section('title')
        <h1>MOVIES</h1>
@endsection

@section('content')
   <h1>MOVIES</h1>
    
        <ul>
            @foreach($movies as $movie)
                
                  <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
                  <li>  {{$movie->storyline}}</li>
                
            @endforeach
        </ul>
   
@endsection