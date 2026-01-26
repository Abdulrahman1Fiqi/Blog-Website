<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $postsFromDB=Post::all();
        
  
        return view('posts.index',['posts'=>$postsFromDB]);
    }


    public function show($postId){
        $singlePostFromDB=Post::findOrFail($postId);


        return view('posts.show',['post'=>$singlePostFromDB]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data=request();

        dd($data->title);

        return to_route('posts.index');
    }

    public function edit(){
        return view('posts.edit');
    }

    public function update(){
        
        $title=Request()->title;
        $description=Request()->description;
        $post_creator=Request()->post_creator;

       // dd($title,$description,$post_creator);

        return to_route('posts.show',1);
    }

    public function destroy(){

    
        return to_route('posts.index');
    }

}
