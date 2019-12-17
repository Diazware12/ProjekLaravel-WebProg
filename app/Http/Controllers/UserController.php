<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
     
        return view('admin/manageUser',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'gender' => ['required', 'in:male,female'],
            'address' => ['required'],
            'date' => ['required', 'date_format:Y-m-d'],
            'myFile' => ['required', 'mimes:jpeg,png,jpg'],
        ]);
        $request->myFile->move(storage_path('app/public/profilepicture'), $request->myFile->getClientOriginalName());
        
        $user = new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->DOB = $request->date;
        $user->picture= $request->myFile->getClientOriginalName();
        $user->role = $request->role;
        $user->save();
        return redirect('/manage/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('/admin/editUser',['user'=>$user]);
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
        return redirect('/manage/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        unlink(storage_path('app/public/profilepicture/'.$user->picture));
        User::destroy($user->id);
        return redirect('/manage/user');
    }
}
