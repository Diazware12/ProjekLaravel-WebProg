@extends('layouts/app')

@section('title','ini movieDetail')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="imageTemp/spiderman.jpg" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <div class="rounded float-right">
                            <img src="..." class="rounded float-right" alt="...">
                        </div>
                            <h5 class="card-title">Movie Title</h5>
                            <p class="card-text"><small class="text-muted">genre</small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><b>8.4</b></p>
                        </div>
                    </div>
                </div>
        </div>
        <p></p>
        <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-10">
                        <div class="card-body">
                            <a href="#">username</a>
                            <div class="rounded float-right">
                                <a href="" class="badge badge-danger">delete</a>
                            </div>
                            <p class="card-text"><small class="text-muted">This is a wider card with supporting text below as a 
                            natural lead-in to additional content. This content is a little bit longer.</small></p>
                        </div>
                    </div>
               </div>
        </div>
        <p></p>
        <form>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="comment"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">comment</button>
        </form>
    </div>



</div>
@endsection