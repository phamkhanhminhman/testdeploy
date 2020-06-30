<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
    	$test = DB::table('categories')->get();
    	return view('welcome', compact('test'));
    }
}
