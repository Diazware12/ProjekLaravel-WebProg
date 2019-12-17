@extends('layouts/app')

@section('title','ini editGenre')

@section('content')
<div class="container">
    <p></p>
    <p></p>   
        <div class="jumbotron">
            <form action="/manage/genre/{{$genre->id}}" method="post">
            @csrf
                <h1>Edit Genre</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="text" name="name" value="{{$genre->genreName}}" placeholder="Genre">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection