<?php

namespace Ugarit\Surveyor\Types\Contracts;

interface CollapsibleType
{
    public function collapse(): Type;
}
