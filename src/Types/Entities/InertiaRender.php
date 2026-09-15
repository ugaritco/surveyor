<?php

namespace Ugarit\Surveyor\Types\Entities;

use Ugarit\Surveyor\Types\ClassType;
use Ugarit\Surveyor\Types\Contracts\Type as TypeContract;

class InertiaRender extends ClassType implements TypeContract
{
    public function __construct(
        public readonly string $view,
        public readonly TypeContract $data,
    ) {
        parent::__construct('Inertia\Response');
    }

    public function id(): string
    {
        return $this->view.'::'.$this->data->id();
    }
}
