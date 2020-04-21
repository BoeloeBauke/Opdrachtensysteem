<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->pluck('id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(6);
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->posts()->create($data);


        return redirect('/profile/' . auth()->user()->id);
    }
          public function show(\App\Post $post)
    {
     return view('posts.show',compact('post'));
    }

}
