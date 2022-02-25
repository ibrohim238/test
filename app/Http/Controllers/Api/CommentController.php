<?php

namespace App\Http\Controllers\Api;

use App\Dto\CommentDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class CommentController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CommentResource::collection(
            Comment::query()->get()
        );
    }

    /**
     * @throws UnknownProperties
     */
    public function store(CommentRequest $request, CommentService $service)
    {
        $comment = $service->save(new Comment(), CommentDto::fromRequest($request));

        return new CommentResource($comment);
    }
}
