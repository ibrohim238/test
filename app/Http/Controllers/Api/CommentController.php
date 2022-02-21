<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\CommentService;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::query()->get();
    }

    public function store(CommentRequest $request, CommentService $service)
    {
        $service->save(new Comment(), $request);
    }
}
