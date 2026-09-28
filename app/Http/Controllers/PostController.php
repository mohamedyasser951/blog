<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts =[
            
            [   "id" => 1,
                "title" => "Post 1",
                "posted_by" => "John Doe",
                "created_at" => "2023-01-01",
            ],
            [
                "id" => 2,
                "title" => "Post 2",
                "posted_by" => "Jane Smith",
                "created_at" => "2023-01-02"
            ],
            [
                "id" => 3,
                "title" => "Post 3",
                "posted_by" => "Bob Johnson",
                "created_at" => "2023-01-03"
            ],
                
        ];
        return view('posts.index', ["posts" => $allPosts]);
    }

    public function show($postId)
    {
        $allPosts =[
            [   "id" => 1,
                "title" => "Post 1",
                "description" => "This is the description for Post 1.",
                "posted_by" => "John Doe",
                "created_at" => "2023-01-01",
            ],
            [
                "id" => 2,
                "title" => "Post 2",
                "description" => "This is the description for Post 2.",
                "posted_by" => "Jane Smith",
                "created_at" => "2023-01-02"
            ],
            [
                "id" => 3,
                "title" => "Post 3",
                "description" => "This is the description for Post 3.",
                "posted_by" => "Bob Johnson",
                "created_at" => "2023-01-03"
            ],
            
        ];
        $post = collect($allPosts)->firstWhere('id', $postId);
        if (!$post) {
            abort(404);
        }
        return view('posts.show', ["post" => $post]);
    }

}
