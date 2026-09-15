<?php

namespace Ugarit\Surveyor\Types\Contracts;

interface MultiType
{
    /**
     * @return Type[]
     */
    public function getTypes(): array;
}
