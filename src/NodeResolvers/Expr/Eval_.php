<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Eval_ extends AbstractResolver
{
    public function resolve(Node\Expr\Eval_ $node)
    {
        return null;
    }
}
