<?php

namespace App\Dto;

use App\Http\Requests\CommentRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class CommentDto extends DataTransferObject
{
    public string $nickname;
    public string $content;

    /**
     * @throws UnknownProperties
     */
    public static function fromRequest(CommentRequest $request): CommentDto
    {
        return new self($request->validated());
    }
}
