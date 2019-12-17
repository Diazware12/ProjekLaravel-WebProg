@extends('layouts/app')

@section('title','ini manageMain')



@section('content')
    <div class="container">
    <h1>Manage User</h1>
    <a href="/manage/user/addUser" class="btn btn-primary">Add User</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FullName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">DOB</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $u)
            <tr>
            
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                
                <td>
                @if($u->role===1)
                admin
                @else
                member
                @endif
                </td>
                <td>{{$u->gender}}</td>
                <td>{{$u->address}}</td>
                <td> <img src="/storage/profilepicture/{{$u->picture}}" class="rounded-circle" width="100" height ="100"></td>
                <td>{{$u->DOB}}</td>
                <td>
                    <a href="user/{{$u->id}}/edit" class="badge badge-success">edit</a>
                    <form action="/manage/user/{{$u->id}}" method="post">
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