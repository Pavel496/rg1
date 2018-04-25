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

    public function sendsms(Request $request)
    {
// dd($request->mobil);
      include('sendsms.php');
      $my_phone = $request->mobil;
      $perro = str_random(5);
      $phone8 = '8' . $my_phone;
      $text = 'Запомните Ваш пароль: ' . $perro;
      $myresult = sendsms($phone8, $text);

    	// return view('auth.register', compact('perro', 'my_phone'));
      return back();
    }



}
