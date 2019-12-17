@extends('layouts/app')

@section('title','ini addMovie')

@section('content')
<div class="container">   
<p></p>
    <p></p>
        <div class="jumbotron">
            <form action="/manage/movie" method="post" enctype="multipart/form-data">
                @csrf
                <h1><p style="text-align:center">Add Movie</p></h1>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Movie Title">
                </div>
                <div class="form-group">
                    <select name="genre" class="form-control" id="genre" placeholder="Movie genre">
                        @foreach($genre as $genres)
                        <option value="{{$genres->id}}">{{$genres->genreName}}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" name ="description"id="exampleFormControlTextarea6" rows="3" placeholder="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="rate" id="rate"  placeholder="rate">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection