<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostsController extends Controller
{
    //create a new view in 'posts' folder (I jsut created the posts folder in views)
    //naming convention:  views in a folder that is named after the controller posts:Posts
    // The main View name (create) matches the function name.
    public function create(){
        return view('posts.create');
    }
    
    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            //'image' => 'required|image',  or...in Laravel if multi items, make array
            'image' => ['required', 'image'],
        ]);
        
        
        auth()->user()->posts()->create($data);

        return view('posts.create')->withMessage("Post Created Successfully");
    }
}
