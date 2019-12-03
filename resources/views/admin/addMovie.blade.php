@extends('master/adminMain')

@section('title','ini addMovie')

@section('container')
<div class="container">   
<p></p>
    <p></p>
        <div class="jumbotron">
            <form>
                <h1><p style="text-align:center">Add Movie</p></h1>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Movie Title">
                </div>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" placeholder="Movie genre">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group shadow-textarea">
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rate">
                </div>
                
                <div class="form-group">
                    Select a file: <input type="file" name="myFile"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection