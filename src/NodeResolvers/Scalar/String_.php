<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class String_ extends AbstractResolver
{
    public function resolve(Node\Scalar\String_ $node)
    {
        return Type::string($node->value);
    }

    public function resolveForCondition(Node\Scalar\String_ $node)
    {
        return Type::string($node->value);
    }
}
