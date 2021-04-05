<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('layouts.posts');
    // }

    public function retrieve() {

        $posts = DB::select("SELECT * FROM posts order by id desc limit 3");
            return view('welcome', ['posts'=>$posts]);
    }

    public function show(Post $blog) {
        return view('layouts.single-post',compact('blog'));
    }


}
