<?php

namespace App\Http\Resources;

use App\Models\User;
use Heritage\Http\Request;
use Heritage\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class UnwrappedResource extends JsonResource
{
    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
