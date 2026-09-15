<?php

namespace App\Http\Resources\JsonApi;

use Heritage\Http\Resources\JsonApi\JsonApiResource;

abstract class BaseInheritedJsonApiResource extends JsonApiResource
{
    public $attributes = ['title', 'body'];

    public $relationships = ['user'];
}
