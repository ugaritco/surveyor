<?php

namespace App\Http\Resources;

use App\Models\Tag;
use Heritage\Http\Request;
use Heritage\Http\Resources\Json\JsonResource;

/**
 * @mixin Tag
 */
class WhenLookupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'has_label' => $this->whenHas('label'),
            'loaded_label' => $this->whenLoaded('label'),
        ];
    }
}
