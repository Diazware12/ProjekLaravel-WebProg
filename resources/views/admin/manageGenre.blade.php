@extends('layouts/app')

@section('title','ini manageGenre')


@section('content')
    <div class="container">
    <h1>Manage Genre</h1>
    <a href="/manage/genre/addGenre" class="btn btn-primary">Add Genre</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($genre as $genre)
            <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$genre->genreName}}</td>
                    <td>
                        <a href="genre/{{$genre->id}}/edit" class="badge badge-success">edit</a>
                        <form action="/manage/genre/{{$genre->id}}" method="post">
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