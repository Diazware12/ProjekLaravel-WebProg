@extends('master/memberMain')

@section('title','ini inbox')

@section ('container')

    <div class="container">

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title
                             <a href="" class="badge badge-danger">delete</a>
                        </h5>
                        <p class="card-text">
                            <h6>post at: <small>2019</small></h6>
                            <br /> 
                            <h6>Message: <small>pakabar bre?</small></h6>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection