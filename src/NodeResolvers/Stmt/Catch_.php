<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Catch_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Catch_ $node)
    {
        return null;
    }
}
