@extends('master/adminMain')

@section('title','ini manageMovie')



@section('container')
    <div class="container">
    <h1>Manage Movie</h1>
    <button type="button" class="btn btn-primary">Add Movie</button>
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
                <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>Thriller</td>
                    <td>Diarick ke gap selingkuh</td>
                    <td>gaada gambar</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                    <td>8.5</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>Thriller</td>
                    <td>Diarick ke gap selingkuh</td>
                    <td>gaada gambar</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                    <td>8.5</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection