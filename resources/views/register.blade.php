@extends('master/main')

@section('title','ini register')

@section('container')
<div class="container">   
<p></p>
    <p></p>
        <div class="jumbotron">
            <form>
                <h1><p style="text-align:center">Register</p></h1>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fullname">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password ">
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                </div>


                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="address"></textarea>
                </div>
                
                <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="date">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection