<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{


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


    public function store(Request $request)
    {
        dd($request->all());
    }



auth()->user()->posts()->create($data);

}
    }
}
