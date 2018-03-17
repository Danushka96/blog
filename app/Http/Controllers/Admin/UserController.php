<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        return view('Admin/users/index');
    }
    public function new(){
        return view('Admin/users/new');
    }
}
