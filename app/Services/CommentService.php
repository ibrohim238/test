<?php

namespace App\Services;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentService
{
    public function save(Comment $comment, CommentRequest $request)
    {
        $data = $request->validated();
        $comment->fill($data)->save();
    }
}
