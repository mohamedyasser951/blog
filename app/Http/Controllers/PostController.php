<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [

            [
                "id" => 1,
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
        $allPosts = [
            [
                "id" => 1,
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

    public function create()
    {
        return view("posts.create");
    }

    public function store()
    {
        // $data =$_POST;
        // return $data;

        // $title = request()->title;
        // $description = request()->description;

        $data = request()->all();
        return to_route("posts.index");
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function update()
    {

        return to_route("posts.show", 1);
    }

    public function destroy()
    {
        return to_route("posts.index");
    }
}
