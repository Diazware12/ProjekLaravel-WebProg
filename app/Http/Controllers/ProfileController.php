<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
      
        
        return view('member/profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('/member/editProfile',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'gender' => ['required', 'in:male,female'],
            'address' => ['required'],
            'date' => ['required', 'date_format:Y-m-d'],
            'myFile' => ['required', 'mimes:jpeg,png,jpg'],
        ]);
        
        unlink(storage_path('app/public/profilepicture/'.$user->picture));
        $request->myFile->move(storage_path('app/public/profilepicture'), $request->myFile->getClientOriginalName());
        $user = User::where('id',$user->id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'gender' => $request->gender,
            'address' => $request->address,
            'DOB' => $request->date,
            'picture'=> $request->myFile->getClientOriginalName(),
            'role' => $request->role,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
