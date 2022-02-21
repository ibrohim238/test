<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CommentController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CommentResource::collection(
            Comment::query()->get()
        );
    }

    public function store(CommentRequest $request, CommentService $service): CommentResource
    {
        return new CommentResource($service->save(new Comment(), $request));
    }
}
