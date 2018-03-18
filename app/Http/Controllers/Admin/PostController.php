<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('Admin/posts/index');
    }

    public function new(){
        return view('Admin/posts/new');
    }
}
