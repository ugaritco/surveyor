<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Echo_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Echo_ $node)
    {
        return null;
    }
}
