<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $postsFromDB=Post::all();
        
  
        return view('posts.index',['posts'=>$postsFromDB]);
    }


    public function show(Post $post){
        

        return view('posts.show',['post'=>$post]);
    }

    public function create(){

        $users=User::all();
        

        return view('posts.create',['users'=>$users]);
    }

    public function store(){
        $data=request()->all();

        $title=request()->title;
        $description=request()->description;
        $postCreator=request()->postCreator;

        $post=new Post();

        $post->title=$title;
        $post->description=$description;

        $post->save();  
        

        return to_route('posts.index');
    }

    public function edit(Post $post){

        $users=User::all();


        return view('posts.edit',['users'=>$users,'post'=>$post]);
    }

    public function update($postId){
        
        $title=Request()->title;
        $description=Request()->description;
        $post_creator=Request()->post_creator;

       $singlePostFromDB=Post::find($postId);

        return to_route('posts.show',1);
    }

    public function destroy(){

    
        return to_route('posts.index');
    }

}
