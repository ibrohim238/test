<?php

namespace App\Services;

use App\Dto\CommentDto;
use App\Models\Comment;

class CommentService
{
    public function save(Comment $comment, CommentDto $dto)
    {
        $comment->fill($dto->toArray())->save();
    }
}
