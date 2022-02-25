<?php

namespace App\Http\Resources;

use App\Models\Comment;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;
/**
 * @mixin Comment
*/
class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'nickname' => $this->nickname,
            'content' => $this->content,
            'created_at' => $this->commentDateFormat($this->created_at),
            'updated_at' => $this->updated_at,
        ];
    }
}
