<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Static_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Static_ $node)
    {
        return null;
    }
}
