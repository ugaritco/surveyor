<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class While_ extends AbstractResolver
{
    public function resolve(Node\Stmt\While_ $node)
    {
        $this->from($node->cond);

        return null;
    }
}
