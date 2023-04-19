<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentFormRequest;
use App\Models\Comment;
use App\Notifications\PostComment;

class CommentController extends Controller
{
    public function store(StoreCommentFormRequest $request)
    {
        // dd(auth()->user());
        $comment = $request->user()->comments()->create($request->all());

        $author = $comment->post->user;
        $author->notify(new PostComment($comment));

        return redirect()
                ->route('posts.show', $comment->post_id)
                ->withSuccess('Comentário realizado com sucesso!');
    }
}
