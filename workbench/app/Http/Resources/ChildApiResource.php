<?php

namespace App\Http\Resources;

use App\Models\Post;
use Heritage\Http\Request;

/**
 * @mixin Post
 */
class ChildApiResource extends BaseApiResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
