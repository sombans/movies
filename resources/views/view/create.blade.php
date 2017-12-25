@extends('layouts.master')
@section('title')
        <h1>Create new movie</h1>
@endsection

@section('content')
<form method="POST" action="{{ route('store-muvie') }}">

    {{ csrf_field() }}


    <div class="form-group has-danger">
        <label class="form-control-label" for="title">title</label>
        <input type="text" class="form-control" id="title" name="title">
            @if($errors->has('title'))
                <ul>
                    @foreach($errors->get('title') as $error)
                <li> {{$error}}</li>
                    @endforeach
                </ul>
            @endif
    </div>
    <div class="form-group">
      <label for="genre">genre</label>
      <select class="form-control" id="genre" name="genre">
        <option value='Pick one'></option>
        <option>Action</option>
        <option>Comedy</option>
        <option>Si-Fi</option>
        <option>Horror</option>
        <option>Drama</option>
      </select>
    @if($errors->has('genre'))
        <ul>
            @foreach($errors->get('genre') as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    @endif
    
    </div>
    <div class="form-group has-danger">
        <label class="form-control-label" for="director">director</label>
        <input type="text" class="form-control" id="director" name="director">
            @if($errors->has('director'))
                <ul>
                    @foreach($errors->get('director') as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            @endif       
    </div>
    <div class="form-group has-danger">
        <label class="form-control-label" for="year">year of make</label>
        <input type="text" class="form-control" id="year" name="year">
            @if($errors->has('year'))
                <ul>
                    @foreach($errors->get('year') as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            @endif
    </div>

    <div class="form-group">
        <label for="storyline">storyline</label>
        <textarea class="form-control" id="storyline" name="storyline" rows="3"></textarea>
             @if($errors->has('storyline'))
                <ul>
                    @foreach($errors->get('storyline') as $error)
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

