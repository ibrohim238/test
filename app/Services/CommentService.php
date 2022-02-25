<?php

namespace App\Services;

use App\Dto\CommentDto;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentService
{
    public function save(Comment $comment, CommentDto $dto): Comment
    {
        $comment->fill($dto->toArray())->save();

        return $comment;
    }
}
