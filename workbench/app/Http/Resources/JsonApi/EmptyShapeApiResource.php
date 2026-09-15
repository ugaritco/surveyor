<?php

namespace App\Http\Resources\JsonApi;

use Heritage\Http\Request;
use Heritage\Http\Resources\JsonApi\JsonApiResource;

class EmptyShapeApiResource extends JsonApiResource
{
    public $attributes = ['title'];

    public function toLinks(Request $request): array
    {
        return [];
    }

    public function toMeta(Request $request): array
    {
        return [];
    }
}
