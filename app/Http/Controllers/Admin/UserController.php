<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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
//        $request->user()->fill([
//            'password' => Hash::make($request->password)
//        ])->save();
        $usernew = new User();
        $usernew -> name= $request->name;
        $usernew -> password= Hash::make($request->input('password'));
        $usernew -> email=$request->email;
        $usernew -> role=$request->role;
        $usernew -> fname=$request->fname;
        $usernew -> lname=$request->lname;
        $usernew -> save();
//        $user=User::create($request->all());
        $user=User::all();
        $role=role::all();
        return view('Admin/users/index',compact('user','role'));
    }
    public function view($userid){
        $current=User::findorFail($userid);
        return view('Admin/users/view',compact($current));
    }
}
