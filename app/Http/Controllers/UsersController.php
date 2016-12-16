<?php

namespace rocket\Http\Controllers;

use Illuminate\Http\Request;

use rocket\User;

class UsersController extends Controller {

    public function index() {
        $users = User::orderBy('id','asc')->paginate(25);
        return view('rocket')->with('users',$users);
    }
 
    public function store(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();
    }
}
