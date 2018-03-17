<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $user=User::all();
        $role=role::all();
        return view('Admin/users/index',compact('user','role'));
    }
    public function new(){
        return view('Admin/users/new');
    }
    public function store(Request $request){
        $user=User::create($request->all());
        $user=User::all();
        $role=role::all();
        return view('Admin/users/index',compact('user','role'));
    }
}
