@extends('layouts.app')

@section('title','ini bagian saved movie')

@section ('content')

    <div class="container">
        @foreach($save as $s)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="/storage/moviepicture/{{$s->movie->picture}}" class="card-img" width="290" height="200">
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                            <div class="rounded float-right">
                                <form action="/save/{{$s->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-link">
                                        <img src="/imageTemp/save.jpg" alt="" width="37" height="30">
                                    </button>
                                </form>
                            </div>
                            

                                <h5 class="card-title">{{$s->movie->title}}</h5>

                            
                            <p class="card-text"><small class="text-muted">{{$s->movie->genre->genreName}}</small></p>
                            <p class="card-text">{{$s->movie->description}}</p>
                            <p class="card-text"><b>{{$s->movie->rating}}</b></p>
                        </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>


@endsection