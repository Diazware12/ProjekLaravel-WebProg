@extends('layouts/app')

@section('title','ini manageMovie')



@section('content')
    <div class="container">
    <h1>Manage Movie</h1>
    <a href="/manage/movie/addMovie" class="btn btn-primary">Add Movie</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Title</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Description</th>
                    <th scope="col">Rating</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($film as $movies)
            
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$movies->user->name}}</td>
                    <td>{{$movies->genre->genreName}}</td>
                    <td>{{$movies->title}}</td>
                    <td>
                    <img src="/storage/moviepicture/{{$movies->picture}}" alt="{{$movies->picture}}" width="140" height="100">
                    </td>
                    <td>
                        {{$movies->description}}
                    </td>
                    <td>{{$movies->rating}}</td>
                    <td>
                        <a href="movie/{{$movies->id}}/edit" class="badge badge-success">edit</a>
                        <form action="/manage/movie/{{$movies->id}}" method="post">
                        @method('delete')
                        @csrf
                            <button type="submit" class="badge badge-danger">delete</button>
                        </form>
                        
                    </td>
                </tr>
               
            @endforeach

            </tbody>
        </table>
    </div>
@endsection