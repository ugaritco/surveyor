<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Print_ extends AbstractResolver
{
    public function resolve(Node\Expr\Print_ $node)
    {
        return null;
    }
}
