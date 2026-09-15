<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Int_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Int_ $node)
    {
        return Type::int();
    }
}
