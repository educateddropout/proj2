<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    

    public function index(){

    	return view('posts.index');

    }

    public function create(){

    	

    	return view('posts.create');
    }

    public function store(){

    	$post = new Post;

    	Post::create(request(['title','body']));

    	return redirect('/');



    	// create a new post using the request data

    	// save it to the database

    	// And then redirect to the home page

    	//return view('');

    }

}

