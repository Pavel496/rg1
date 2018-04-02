<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    // public function __construct()
    // {
    //     $mylink = true;
    // }


    public function mySearch(Request $request)
    {

    	if($request->has('search')){
        // $mylink = false;
        $posts = Post::search($request->get('search'))->orderBy('id', 'desc')->get();
    	}else{
        // $mylink = true;
    		$posts = Post::orderBy('id', 'desc')->paginate();
    	}


    	return view('jobs', compact('posts'));
    }
}
