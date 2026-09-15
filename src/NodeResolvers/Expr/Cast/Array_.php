<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Array_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Array_ $node)
    {
        return Type::array([]);
    }
}
