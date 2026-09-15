<?php

namespace Ugarit\Surveyor\Types\Entities;

use Ugarit\Surveyor\Types\ClassType;
use Ugarit\Surveyor\Types\Contracts\Type as TypeContract;

class View extends ClassType implements TypeContract
{
    public function __construct(
        public readonly string $view,
        public readonly TypeContract $data,
    ) {
        parent::__construct('Heritage\View\View');
    }

    public function id(): string
    {
        return $this->view.'::'.$this->data->id();
    }
}
