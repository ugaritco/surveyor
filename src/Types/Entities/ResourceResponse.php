<?php

namespace Ugarit\Surveyor\Types\Entities;

use Ugarit\Surveyor\Types\ClassType;
use Ugarit\Surveyor\Types\Contracts\Type as TypeContract;

class ResourceResponse extends ClassType
{
    public function __construct(
        public readonly string $resourceClass,
        public readonly TypeContract $data,
        public readonly bool $isCollection = false,
        public readonly ?string $wrap = 'data',
        public readonly ?TypeContract $additional = null,
    ) {
        parent::__construct($resourceClass);
    }

    public function id(): string
    {
        $id = $this->resourceClass.'::'.$this->data->id();

        return $this->isCollection ? $id.'[]' : $id;
    }
}
