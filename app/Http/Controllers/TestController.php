<?php

namespace rocket\Http\Controllers;

use Illuminate\Http\Request;

use rocket\Script;

class TestController extends Controller
{
    public function view($id) {
    	$script = Script::find($id);
    	$script->user;
    	return view('scripts',['script' => $script]);
    }
}
