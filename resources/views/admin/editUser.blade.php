@extends('layouts/app')

@section('title','ini editUser')

@section('content')
<div class="container">   
    <p></p>
    <p></p>
        <div class="jumbotron">
            <form action="/manage/user/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
                <h1>Edit User</h1>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}"  placeholder="Fullname">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" placeholder="Email">
                </div>
                
                <div class="form-group">
                @if($user->role===1)
                    <select name="role"  class="form-control" id="role">
                        <option value="1">Admin</option>
                        <option value="2">Member</option>
                    </select>
                @else
                <select name="role"  class="form-control" id="role">
                        <option value="2">Member</option>
                        <option value="1">Admin</option>
                    </select>
                @endif
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password"  placeholder="password">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" id="cPassword"  name="password_confirmation" placeholder="confirm password ">
                </div>
                <div class="form-group">
                @if($user->gender==="male")
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                @else
                    <input type="radio" name="gender" value="male" > Male
                    <input type="radio" name="gender" value="female" checked> Female<br>
                @endif
                </div>


                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" name="address" id="exampleFormControlTextarea6" rows="3" placeholder="address">{{$user->address}}</textarea>
                </div>
                
                <div class="form-group">
                    <input type="date" value="{{$user->DOB}}" name="date" class="form-control" id="date"  placeholder="date">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Edit User</button>
            </form>
        </div>
    </div>
@endsection