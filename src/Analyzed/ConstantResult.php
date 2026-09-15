<?php

namespace Ugarit\Surveyor\Analyzed;

use Ugarit\Surveyor\Types\Contracts\Type;

class ConstantResult
{
    public function __construct(
        public readonly string $name,
        public readonly ?Type $type,
    ) {
        //
    }
}
