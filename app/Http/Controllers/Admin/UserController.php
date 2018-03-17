<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $user=User::all();
        return view('Admin/users/index',compact('user'));
    }
    public function new(){
        return view('Admin/users/new');
    }
}
