@extends('master/adminMain')

@section('title','ini manageMain')



@section('container')
    <div class="container">
    <h1>Manage User</h1>
    <button type="button" class="btn btn-primary">Add User</button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FullName</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">DOB</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Diarick purba</td>
                <td>admin</td>
                <td>shemale</td>
                <td>binus square</td>
                <td>haha</td>
                <td>29-02-2019</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>Diarick purba</td>
                <td>admin</td>
                <td>shemale</td>
                <td>binus square</td>
                <td>haha</td>
                <td>29-02-2019</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection