@extends('layouts/app')

@section('title','ini editMovie')

@section('content')
<div class="container">   
<p></p>
    <p></p>
        <div class="jumbotron">
            <form action="/manage/movie/{{$movie->id}}" method="post" enctype="multipart/form-data">
            @csrf
                <h1><p style="text-align:center">Edit Movie</p></h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="name" value="{{$movie->title}}"  placeholder="Movie Title">
                </div>
                <div class="form-group">
                    <select class="form-control" name="genre" id="exampleFormControlSelect1" placeholder="Movie genre">
                    @foreach($genre as $genres)
                    <option value="{{$genres->id}}">{{$genres->genreName}}</option>
                    @endforeach
                        
                    </select>
                </div>

                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" name="description" id="exampleFormControlTextarea6" rows="3" placeholder="description">{{$movie->description}}</textarea>
                </div>
                <div class="form-group">
                    <input type="test" class="form-control" name="rate" value="{{$movie->rating}}" id="rate"  placeholder="rate">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection