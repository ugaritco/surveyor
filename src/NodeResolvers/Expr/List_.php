<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class List_ extends AbstractResolver
{
    public function resolve(Node\Expr\List_ $node)
    {
        return null;
    }
}
