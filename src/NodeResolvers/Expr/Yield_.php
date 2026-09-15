<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Yield_ extends AbstractResolver
{
    public function resolve(Node\Expr\Yield_ $node)
    {
        return null;
    }
}
