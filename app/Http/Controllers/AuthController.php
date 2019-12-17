<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $pass = $request->password;
        if(auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            if($request->remember == true){
                Cookie::queue(Cookie::make('user_email',$email, 10));
                Cookie::queue(Cookie::make('user_password',$pass, 10));
            }

        return redirect('/');
        } return redirect('/login');
    }

    public function loginPage(){
        return view('/login');
    }

    public function register(Request $request){
        //dd($request->all());
        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
            'password' => 'required',
            'confirmation_password' => 'required|same:password',
            'picture' => 'required|mimes:png,jpg',
            'birthday' => 'required|date'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;

        $picture_name = uniqid().$request->picture->getClientOriginalName();

        $request->picture->move(storage_path('public/images/'),$picture_name);
        $user->picture = $picture_name;
        $user->save();

        return redirect('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
