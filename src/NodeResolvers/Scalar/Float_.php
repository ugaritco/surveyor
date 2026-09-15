<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Float_ extends AbstractResolver
{
    public function resolve(Node\Scalar\Float_ $node)
    {
        return Type::float($node->value);
    }
}
