@extends('layouts.app')

@section('content')
<div class="container">
        <p></p>
            <form action="{{url('home/search')}}" class="form-inline my-2 my-lg-0" method="get">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            </form>
        <p></p>
        @foreach($movie as $m)
        <div class="card mb-3" >
            
            <div class="row no-gutters">

                <div class="col-md-3">
                    <img src="/storage/moviepicture/{{$m->picture}}" alt="{{$m->picture}}" width="290" height="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="rounded float-right">
                       @guest
                            @else
                                @if(Auth::user()->role===2)
                                    @if($m->isSaved == false)
                                        <form action="/save/{{$m->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-link">
                                                <img src="/imageTemp/unsave.jpg" alt="" width="37" height="30">
                                            </button>
                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-link">
                                            <img src="/imageTemp/save.jpg" alt="" width="37" height="30">
                                        </button>
                                    @endif
                                @endif
                       @endguest
                        
                        </div>
                        <a href="/movie/{{$m->id}}"> 
                            <h5 class="card-title">{{$m->title}}</h5>
                        </a>
                        
                        <p class="card-text"><small class="text-muted">{{$m->genre->genreName}}</small></p>
                        <p class="card-text">{{$m->description}}</p>
                        <p class="card-text"><b>{{$m -> rating}}</b></p>
                    </div>
                </div>

            </div>

        </div>
        @endforeach
        {{$movie->links()}}
 </div>
@endsection
