<?php

namespace App\Http\Controllers;
use Auth;
use App\Save;
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //untuk menampilkan home page
        $save = Save::all()->where('user_id', Auth::id());
        $movie= Movie::paginate(10);
        
        return view('home', ['movie'=>$movie], ['save'=>$save]);
    }

    public function search(Request $request){
        //untuk menampilkan data ayng disave
        $save = Save::all()->where('user_id', Auth::id());
        $search = $request->search;
        $movie = Movie::where('title', 'LIKE', "%".$search."%")->paginate(10);
        return view('home', ['movie'=>$movie], ['save'=>$save]);
    }



}
