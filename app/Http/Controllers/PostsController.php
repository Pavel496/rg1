<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class PostsController extends Controller
{
  public function show(Post $post)
  {
    // dd($post);

    // if ($post->isPublished() || auth()->check())
    // {
      return view('posts.show', compact('post'));
    // }

    abort(404);
  }

  public function showhid($hid)
  {
    // dd($hid);
    $id = Hashids::decode($hid);
    $post = Post::find($id)->first();
// dd($post);
    return view('posts.show', compact('post'));

  }

}
