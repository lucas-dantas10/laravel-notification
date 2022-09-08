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
        $posts = $this->post->paginate(15);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = $this->post->find($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
