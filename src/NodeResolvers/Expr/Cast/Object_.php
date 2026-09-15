<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Object_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Object_ $node)
    {
        return Type::object();
    }
}
