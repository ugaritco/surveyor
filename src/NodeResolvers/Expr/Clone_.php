<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Clone_ extends AbstractResolver
{
    public function resolve(Node\Expr\Clone_ $node)
    {
        return $this->from($node->expr);
    }
}
