@extends('master/memberMain')

@section('title','ini memberProfile')

@section('container')
<div class="container">
        <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="imageTemp/spiderman.jpg" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body"> 
                        <div class="rounded float-right">
                             <a href="" class="badge badge-danger">delete</a>
                        </div>
                            <h5 class="card-title">Username</h5>
                            <p class="card-text"><b>username@email.com</b></p>
                            <p class="card-text">jl.puncak pesanggrahan X no.9</p>
                        </div>
                    </div>
                </div>
        </div>

</div>
@endsection