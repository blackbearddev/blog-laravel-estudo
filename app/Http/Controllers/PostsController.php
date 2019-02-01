<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostsController extends Controller
{
    //
     public function index()
    {
        return View('posts.index');
    }

    public function store(/*StoreBlogPost $request*/Request $request)
    {
       //$validated = $request->validated();
       $messages = [
        'required' => 'The :attribute é obrigatorio'
       ];
       $validator = Validator::make($request->all(), 
       [
           'title' => 'required|max:5',
           'body' => 'required'
       ], $messages);

       

       
       if($validator->fails()){
           return redirect('posts')
           ->withErrors($validator, "posts")
           ->withInput();
       }

       echo "ok";
    }
}
