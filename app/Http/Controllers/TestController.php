<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Script;

class TestController extends Controller
{
    public function view($id) {
    	$script = Script::find($id);
    	$script->user;
    	return view('scripts',['script' => $script]);
    }
}
