@extends('layouts/app')

@section('title','ini createUser')

@section('content')
<div class="container">   
    <p></p>
    <p></p>
        <div class="jumbotron">
            <form action="/manage/user" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Create User</h1>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Fullname">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Email">
                </div>
                
                <div class="form-group">
                    <select name="role" class="form-control" id="role">
                        <option value="1">Admin</option>
                        <option value="2">Member</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"  placeholder="password">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation" placeholder="confirm password ">
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                </div>


                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" name="address" id="exampleFormControlTextarea6" rows="3" placeholder="address"></textarea>
                </div>
                
                <div class="form-group">
                    <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="date">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Create User</button>
            </form>
        </div>
    </div>
@endsection