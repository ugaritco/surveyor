<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Unset_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Unset_ $node)
    {
        return Type::null();
    }
}
