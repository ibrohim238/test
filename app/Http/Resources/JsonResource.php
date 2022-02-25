<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as BaseJsonResource;

class JsonResource extends BaseJsonResource
{
    public function commentDateFormat(Carbon $date): string
    {
        return $date->format('H:i d-m-Y');
    }
}
