<?php

namespace App\Http\Resources;

use App\Models\Post;
use Heritage\Http\Request;
use Heritage\Http\Resources\Json\JsonResource;

/**
 * @mixin Post
 */
class CustomWrapResource extends JsonResource
{
    public static $wrap = 'results';

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
