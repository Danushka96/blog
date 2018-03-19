<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){

        $users=array();
        $all_user=User::all();
        foreach ($all_user as $user){
            $users[$user['id']]=$user['fname'];
        }
        $posts=Post::all();
        return view('Admin/posts/index',compact('posts','users'));
    }

    public function new(){
        return view('Admin/posts/new');
    }

    public function store(Request $request){
        {
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
            $summernote = new Post();
            $summernote->body = $detail;
            $summernote->title = $request->title;
            $summernote->userid = Auth::user()->id;
            $summernote->save();
            return view('Admin/posts/view',compact('summernote'));
        }
    }

    public function view($id){

    }
    public function edit($id){

    }
    public function update(Request $request){

    }
    public function delete($id){

    }
}
