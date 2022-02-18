<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read $nickname
 * @property-read $content
*/
class CommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nickname' => ['required', 'string', 'min:6', 'max:36'],
            'content' => ['required', 'string', 'max:625'],
        ];
    }
}
