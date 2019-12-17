@extends('layouts/app')

@section('title','ini movieDetail')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="/storage/moviepicture/{{$movie->picture}}" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text"><small class="text-muted">{{$movie->genre->genreName}}</small></p>
                            <p class="card-text">{{$movie->description}}</p>
                            <p class="card-text"><b>{{$movie->rating}}</b></p>
                        </div>
                    </div>
                </div>
        </div>
        <p></p>
        <div class="card mb-3">
                <div class="row no-gutters">
                @foreach ($movie->comment as $comments)
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="" src="/storage/profilepicture/{{$comments->user->picture}}" style="width:80px; height:80px; border-radius:50%" >
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/users/{{$comments->user->id}}/profile">
                                <strong>{{$comments->user->name}}</strong>
                                
                            </a>
                            <br>
                            <span class="text-muted"><small>{{$comments->created_at}}</small></span>
                        </div>
                        <div class="panel-body">
                            {{$comments->comment}}
                        </div>
                    </div>
                    <br>
                </div>
                @guest
                    <div class="col-sm-2"></div>
                @else
                    @if (Auth::user()->id===$comments->user->id)
                        <div class="col-sm-2">
                            <form action="/movie/{{$comments->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="text" value="{{$movie->id}}" name="movieId" hidden>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    @else
                        <div class="col-sm-2"></div>
                    @endif
                @endguest
        @endforeach
               </div>
        </div>
        <p></p>
        @guest
        @else
            @if(Auth::user()->role===1)
            @else
        <form action="/movie/comment" method="POST">
        @csrf
            <input type="text" value="{{$movie->id}}" name="movieId" hidden>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" name="comment" id="exampleFormControlTextarea6" rows="3" placeholder="comment"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">comment</button>
        </form>
            @endif
        @endguest

        
        

    </div>



</div>
@endsection