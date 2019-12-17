@extends('layouts/app')

@section('title','ini memberProfile')

@section('content')
<div class="container">
        <div class="card mb-3">
                <div class="row no-gutters">
            
                    <div class="col-md-3">
                        <img src="/storage/profilepicture/{{$user->picture}}" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body"> 
                        @if ($user->id == Auth::id())
                            <div class="rounded float-right">
                                <a href="/user/{{$user->id}}/profile/edit" class="badge badge-danger">Update Profile</a>
                            </div>
                        @endif
                            <h5 class="card-title">{{$user->name}}</h5>
                            <p class="card-text"><b>{{$user->email}}</b></p>  
                            <p class="card-text">{{$user->address}}</p>
                        </div>
                    </div>
                </div>
                @if ($user -> id != Auth::id())
                <div class="jumbotron">
                    <form action="/inbox/message" method="post">
                    @csrf
                        <div class="col-md-20">
                            <input type="text" value="{{$user->id}}" name="receiverId" hidden>
                            <textarea class="form-control z-depth-1" name="message" id="exampleFormControlTextarea6" rows="5" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary">send messages</button>
                        </div>
                    </form>
                </div>
                @endif
             
        </div>

</div>
@endsection

<!--            

-->