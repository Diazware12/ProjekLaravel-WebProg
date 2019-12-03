@extends('master/memberMain')

@section('title','ini bagian saved movie')

@section ('container')

    <div class="container">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="imageTemp/spiderman.jpg" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Movie Title</h5>
                        <p class="card-text"><small class="text-muted">genre</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><b>8.4</b></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="imageTemp/spiderman.jpg" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Movie Title</h5>
                        <p class="card-text"><small class="text-muted">genre</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><b>8.4</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="imageTemp/spiderman.jpg" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Movie Title</h5>
                        <p class="card-text"><small class="text-muted">genre</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><b>8.4</b></p>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
        </nav>

    </div>

@endsection