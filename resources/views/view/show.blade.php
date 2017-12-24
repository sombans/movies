@extends('layouts.master')
@section('title')
        <h1>MOVIES</h1>
@endsection

@section('content')
   <h1>MOVIES</h1>
   
    <li> Name of movie: {{$movie->title}}</li>
    <li> Movie Genre : {{$movie->genre}}</li>
    <li> Director : {{$movie->director}}</li>
    <li> Produced in {{$movie->year}}</li>
    <li> Storyline:  {{$movie->storyline}}</li>

@endsection