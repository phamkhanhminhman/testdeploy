<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class testController extends Controller
{
    public function test()
    {
    	$test = DB::table('categories')->get();
    	return view('welcome', compact('test'));
    }

    public function test1()
    {
    	$post = Post::find('p3')->user;
  		dd($post);
    }
}
