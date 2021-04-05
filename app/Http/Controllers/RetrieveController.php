<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use DB;

class RetrieveController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.allposts');
    }

    public function retrieveAll() {
        $posts = Post::latest()->paginate(6);
        //$posts = DB::select("SELECT * FROM posts order by 1 asc")->paginate(6);
            return view('layouts.allposts', compact('posts'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Post $blog) {
        return view('layouts.single-post',compact('blog'));

        
    }


}
