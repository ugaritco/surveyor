<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Case_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Case_ $node)
    {
        return null;
    }
}
