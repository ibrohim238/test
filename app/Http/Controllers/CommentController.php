<?php

namespace App\Http\Controllers;

use App\Dto\CommentDto;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\CommentService;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::query()->get();
        return view('home', compact('comments'));
    }

    public function store(CommentRequest $request, CommentService $service)
    {
        $service->save(new Comment(), CommentDto::fromRequest($request));

        return back();
    }
}
