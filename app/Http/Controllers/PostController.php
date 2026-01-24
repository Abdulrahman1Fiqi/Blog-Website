<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts=[
            ['id'=>1,'title'=>'PHP','Poste_by'=>'Ahmed','Created_at'=> '2022-10-10 09:00:00'],
            ['id'=>2,'title'=>'Java','Poste_by'=>'Mohammed','Created_at'=> '2023-08-20 07:00:00'],
            ['id'=>3,'title'=>'HTML','Poste_by'=>'Mohammed','Created_at'=> '2023-10-06 06:00:00'],
            ['id'=>4,'title'=>'CSS','Poste_by'=>'Ali','Created_at'=> '2023-08-07 05:00:00'],
        ];
        return view('posts.index',['posts'=>$allPosts]);
    }


    public function show(){
        $singlePost=[
            'id'=>4,'title'=>'CSS','Description'=>"This is description",'Poste_by'=>'Ali','Created_at'=> '2023-08-07 05:00:00'
        ];
        return view('posts.show',['post'=>$singlePost]);
    }

    public function create(){
        return view('posts.create');
    }

}
