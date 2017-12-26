@extends('layouts.master')
@section('title')
        <h1>MOVIES</h1>
@endsection

@section('content')
   <h1>MOVIES</h1>
<div class="jumbotron">
  <h1 class="display-5"><li> Name of movie: {{$movie->title}}</li></h1>
  <p class="lead">
    
     
    <li> Movie Genre : <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></li>
    <li> Director : {{$movie->director}}</li>
    <li> Produced in {{$movie->year}}</li>
    <li> Storyline:  {{$movie->storyline}}</li>
    </p>
  
</div>  

    <h4>komentari</h4>
        <ol>
            @foreach($movie->comments as $comment)
                <li> 
                    <p>{{$comment->created_at}}</p>
                    <p>{{$comment->content}}</p>
                    <hr class="my-4">
                </li>
            @endforeach
        </ol>

<form method="POST" action="{{ route('comment-movie', ['movie_id'=>$movie->id]) }}">

        {{ csrf_field() }}


        <div class="form-group">
            <label for="content">comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>
             @if($errors->has('content'))
            <ul>
                @foreach($errors->get('content') as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>

@endsection