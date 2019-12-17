@extends('layouts/app')

@section('title','ini AddGenre')

@section('content')
<div class="container">   
    <p></p>
    <p></p>
        <div class="jumbotron">
            <form action="/manage/genre" method="post" >
            @csrf
                <h1>Add Genre</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="genre" aria-describedby="emailHelp" placeholder="Genre">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection