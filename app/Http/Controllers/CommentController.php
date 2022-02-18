<?php

namespace App\Http\Controllers;

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
        $service->save(new Comment(), $request);

        return back();
    }
}
