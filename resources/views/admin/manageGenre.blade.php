@extends('master/adminMain')

@section('title','ini manageGenre')


@section('container')
    <div class="container">
    <h1>Manage Genre</h1>
    <button type="button" class="btn btn-primary">Add Genre</button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sci fi</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Sci fi</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Sci fi</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection