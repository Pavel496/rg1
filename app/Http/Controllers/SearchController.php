<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\Post;

class SearchController extends Controller
{

    public function mySearch(Request $request)
    {

    	if($request->has('search')){
        $posts = Post::search($request->get('search'))->orderBy('id', 'desc')->get();
    	}else{
    		$posts = Post::orderBy('id', 'desc')->paginate();
    	}

    	return view('jobs', compact('posts'));
    }


    public function sendsms(Request $request)
    {
      $my_phone = $request->input('mobil');
      $havephone = Phone::where('phone', '8' . $my_phone)->first();
      if ( $havephone ) {
        $message = 'Ваши вакансии обнаружены. Вам отправлена СМС с кодом';
        include('sendsms.php');
        // $my_phone = $request->mobil;
        $perro = str_random(5);
        Phone::where('phone', $havephone->phone)->update(['sval1' => $perro]);
        $phone8 = '8' . $my_phone;
        $text = 'Ваш код: ' . $perro;
        $myresult = sendsms($phone8, $text);
      } else {
        $message = 'Ваших вакансий базе нет';
      }

      return back()->withFlash($message);;
    }


    public function getvacancies(Request $request)
    {
      $code = $request->input('code');
      if ($code) {
        $message = 'Ваши вакансии можно увидеть в меню Публикации';
        $phones = Phone::where('sval1', $code)->first();
        Post::where('phone', $phones->phone)->update(['user_id' => auth()->user()->id]);
      } else {
        $message = 'Не правильно введен код';
      }

      return back()->withFlash($message);
    }

}
