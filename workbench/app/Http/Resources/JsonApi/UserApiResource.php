<?php

namespace App\Http\Resources\JsonApi;

use App\Models\User;
use Heritage\Http\Request;
use Heritage\Http\Resources\JsonApi\JsonApiResource;

/**
 * @mixin User
 */
class UserApiResource extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function toRelationships(Request $request): array
    {
        return [
            'posts' => PostApiResource::class,
        ];
    }

    public function toLinks(Request $request): array
    {
        return [
            'self' => '/api/users/'.$this->id,
        ];
    }

    public function toMeta(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
        ];
    }

    public function with($request)
    {
        return [
            'jsonapi' => [
                'version' => '1.0',
            ],
        ];
    }
}
