<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){

        $allPosts=[
            [
                'id'=> 1,
                'Title'=> 'laravel',
                'description'=>'hello laravel',
                'posted_by'=>'noor',
                'createdat'=>'1-12-2020',
            ],
            [
                'id'=> 2,
                'Title'=> 'php',
                'description'=>'hello php',
                'posted_by'=>'ali',
                'createdat'=>'1-5-2020',
            ]
        ];
        return view('posts.index',
                ['posts'=>$allPosts]);
    }
    public function show($id){
       $post=[
        [
            'id'=> 3,
            'Title'=> 'node',
            'description'=>'hello node',
            'posted_by'=>'looz',
            'createdat'=>'1-10-2012',
        ],
        [
            'id'=> 4,
            'Title'=> 'php',
            'description'=>'hello php',
            'posted_by'=>'looooz',
            'createdat'=>'1-10-2012',
        ]
        ];
        return view('posts.show',['post'=>$post]);
    }
    public function create(){
        $post=[
             [
            'id'=> 5,
            'Title'=> 'php',
            'description'=>'hello php',
            'posted_by'=>'looooz',
            'createdat'=>'1-10-2012',
             ]
        ];
             return view('posts.create',['post'=>$post]);
    }
    public function update($id){
        $post=[
             [
            'id'=> 4,
            'Title'=> 'js',
            'description'=>'hello js',
            'posted_by'=>'noora',
            'createdat'=>'1-10-2012',
             ]
        ];
             return view('posts.update',['post'=>$post]);
    }
    public function delete($id){
             return view('posts.index',['post'=>$post]);
    }
}
