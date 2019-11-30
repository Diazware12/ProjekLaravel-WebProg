@extends('master/adminMain')

@section('title','ini editGenre')

@section('container')
<div class="container">
    <p></p>
    <p></p>   
        <div class="jumbotron">
            <form>
                <h1>Edit Genre</h1>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Genre">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection