<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function retrieveData() {
        $posts = DB::select("SELECT * FROM posts order by id desc limit 10");
        $users = DB::select("SELECT * FROM users order by id asc limit 10");
            return view('home', ['posts'=>$posts, 'users'=>$users]);
    }

    // public function retrieveUsers() {
    //     $users = DB::select("SELECT * FROM users order by id asc limit 10");
    //         return view('home', ['users'=>$users]);
    // }


}
