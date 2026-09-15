<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Finally_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Finally_ $node)
    {
        return null;
    }
}
