<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class testController extends Controller
{
    
    public function test(Request $request)
    {
        $request->session()->flush();
    	$test = DB::table('categories')->get();
    	return view('welcome', compact('test'));
    }

    public function test1(Request $request)
    {
        dd($request->session()->all());
       
        $post = Post::find('p3')->user;
  		dd($post);
    }

    public function session(Request $request)
    {   
        
        $request->session()->put('test', 4565);
        // dd($request->session()->get('test'));
     //       dd($request->session()->all());

    }
}
