@extends('layouts/app')

@section('title','ini inbox')

@section ('content')

    <div class="container">

    @foreach ($message as $m)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src=".." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="/inbox/{{$m->id}}" method="post">
                        @method('delete')
                        @csrf
                            <div class="rounded float-right">
                                <button type="submit" class="badge badge-danger">delete</button>

                            </div>
                        </form>
                        
                        <h5 class="card-title">{{$m->userSender->name}}</h5>
                        <p class="card-text">
                            <h6>post at: <small>2019</small></h6>
                            <br /> 
                            <h6>Message: <small>{{$m->message}}</small></h6>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>

@endsection