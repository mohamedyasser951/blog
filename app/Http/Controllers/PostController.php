<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view('posts.index', ["posts" => $allPosts]);
    }

    public function show($postId)
    {
        $singlePostFromDb = Post::findOrFail($postId);
        // if (!$singlePostFromDb) {
        //     abort(404);
        // }
        return view('posts.show', ["post" => $singlePostFromDb]);
    }

    public function create()
    {
        $users = User::all();

        return view("posts.create", ['users' => $users]);
    }

    public function store()
    {
        // $data =$_POST;
        // return $data;

        $title = request()->title;
        $description = request()->description;
        // $posted_by = request()->posted_by;

        // $post = new Post;
        // $post->title = $title;
        // $post->description = $description;
        // // $post->posted_by = $posted_by;
        // $post->save();
        Post::create([
            "title" => $title,
            "description" => $description,
        ]);

        return to_route("posts.index");
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', ['users' => $users, 'post' => $post]);
    }

    public function update($postId)
    {

        $title = request()->title;
        $description = request()->description;
        $posted_by = request()->posted_by;

        $singlePostFromDb = Post::findOrFail($postId);
        $singlePostFromDb->update(
            [
                'title' => $title,
                'description' => $description,
                'posted_by' => $posted_by
            ]
        );


        return to_route("posts.show", 1);
    }

    public function destroy()
    {
        return to_route("posts.index");
    }
}
