<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->with('comments')->paginate(15);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = $this->post->with(['comments.user', 'user'])->find($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
