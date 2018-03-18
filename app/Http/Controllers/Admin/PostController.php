<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('Admin.posts.index');
    }

    public function create () {
    	return view('Admin.posts.create');
    }

    public function new(){
        return view('Admin/posts/new');
    }
}
