<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
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
        return view('layouts.posts');
    }

    public function save(Request $req) {
        $req->validate(['image' => 'image|mimes:jpeg,png,jpg|max:2048']);
        
        $post = new Post;
        $data = $req->input();
        
        if(($data['post_title'] != "") && ($data['post_article'] != "")) {
            $post->title = $data['post_title'];
            $post->article = $data['post_article'];
            $post->links = $data['post_links'];
            if($req-> file()) {
                $fileName = time().'_'.$req->post_image->getClientOriginalName();
                $filePath = $req->file('post_image')->storeAs('uploads', $fileName, 'my_upload');
                $post->image = '/files/' . $filePath;
            }else {
                $post->image = 'No image';
            }
            $post->save();
            return redirect()->route('home');
        }

        

    }

    public function retrieve() {
        $posts = DB::select("SELECT * FROM posts order by id desc limit 3");
            return view('welcome',['posts'=>$posts]);
    }


}
