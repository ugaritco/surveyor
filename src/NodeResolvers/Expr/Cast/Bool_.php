<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Bool_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Bool_ $node)
    {
        return Type::bool();
    }
}
