<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Do_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Do_ $node)
    {
        return null;
    }
}
