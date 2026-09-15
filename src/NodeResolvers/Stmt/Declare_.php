<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Declare_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Declare_ $node)
    {
        return null;
    }
}
