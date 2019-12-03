@extends('master/memberMain')

@section('title','ini otherProfile')

@section('container')
<div class="container">
        <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="imageTemp/spiderman.jpg" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body"> 
                            <h5 class="card-title">Username</h5>
                            <p class="card-text"><b>username@email.com</b></p>
                            <p class="card-text">jl.puncak pesanggrahan X no.9</p>
                        </div>
                    </div>
                </div>
                <div class="jumbotron">
                    <form>
                        <div class="col-md-20">
                            <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="comment"></textarea>
                            <button type="submit" class="btn btn-primary">send messages</button>
                        </div>
                    </form>
                </div>
        </div>

</div>
@endsection