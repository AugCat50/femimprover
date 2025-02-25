<?php

namespace App\Http\Controllers\Blog\Comment;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Comment\StoreRequest;
use App\Models\Comment;

class StoreController extends Controller
{
    //Метод по умолчанию.
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data            = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);

        return redirect()->route('blog.post.show', $post->id);
    }
}
