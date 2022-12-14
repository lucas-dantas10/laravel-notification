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
        $posts = $this->post->with('comments')->paginate(7);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->user()->posts()->create($request->all());

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = $this->post->with(['comments.user', 'user'])->find($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {   
        $post = $this->post->find($id);

        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('posts');
    }

    public function delete($id)
    {
        $post = $this->post->with(['comments.user', 'user'])->find($id);

        return view('posts.delete', [
            'post' => $post
        ]);
    }

    public function destroy($id)
    {
        $post = $this->post->find($id);

        $post->delete();

        return redirect('posts');
    }
}
