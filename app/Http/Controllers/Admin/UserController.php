<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->join('roles', 'users.role', '=', 'role_id')->get();
        return $users;
    }
    public function new(){
        return view('Admin/users/new');
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
        ]);

        $usernew = new User();
        $usernew -> name= $request->name;
        $usernew -> password= Hash::make($request->input('password'));
        $usernew -> email=$request->email;
        $usernew -> role=$request->role;
        $usernew -> fname=$request->fname;
        $usernew -> lname=$request->lname;
        $usernew -> save();
        return $usernew;
    }
    public function view($userid){
        $current=User::findorFail($userid);
        return $current;
        return view('Admin/users/view',compact('current'));
    }
    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
        ]);

        $user=User::findorFail($request->id);
//        $current=$user;
        $user->update($request->all());
        $current=User::findorFail($request->id);
        $current->about=$request->about;
        $current->save();
//        DB::table('users')->update(['about'=>($request->about)])->where('id','1');
//        echo $request;
        return $current;
    }

    public function drop($id){
        $current=User::findorFail($id);
        $current->delete();
        $users = DB::table('users')->join('roles', 'users.role', '=', 'role_id')->get();
        return $users;
    }
}
