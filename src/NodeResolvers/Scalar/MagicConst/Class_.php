<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Class_ extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Class_ $node)
    {
        return Type::from($this->scope->entityName());
    }
}
