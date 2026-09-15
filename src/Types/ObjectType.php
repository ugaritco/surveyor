<?php

namespace Ugarit\Surveyor\Types;

class ObjectType extends AbstractType
{
    public function __construct()
    {
        //
    }

    public function id(): string
    {
        return 'object';
    }
}
