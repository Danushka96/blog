<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->join('users', 'posts.userid', '=', 'users.user_id')->get();
        return $posts;
    }

    public function new(){
        return view('Admin/posts/new');
    }

    public function store(Request $request){
        {
            // return (Post::find($request->post_id)) ? Post::find($request->post_id) : new Post();
            $this->validate($request, [
                'title' => 'required',
                'body'=> 'required'
            ]);

            $detail=$request->body;

            $dom = new \domdocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getelementsbytagname('img');

            foreach($images as $k => $img){
                $data = $img->getattribute('src');

                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);

                $data = base64_decode($data);
                $image_name= time().$k.'.png';
                $path = public_path() .'/'. $image_name;

                file_put_contents($path, $data);

                $img->removeattribute('src');
                $img->setattribute('src', $image_name);
            }

            $detail = $dom->savehtml();
            $summernote = (Post::find($request->post_id)) ? Post::find($request->post_id) : new Post();
            $summernote->body = $detail;
            $summernote->title = $request->title;
            $summernote->userid = Auth::user()->user_id;
            $summernote->save();
            // $summernote->post_id = $request->post_id
            return $summernote;
        }
    }

    public function view($id){
        $post = Post::find($id);
        return $post;
    }
    public function edit($id){

    }
    public function update(Post $id){
        
        return view('Admin.posts.new', [
            'post' => $id,
        ]);
    }
    public function delete($id){
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        } else {
            $post->delete();
            return DB::table('posts')->join('users', 'posts.userid', '=', 'users.user_id')->get();
        }
    }
}
