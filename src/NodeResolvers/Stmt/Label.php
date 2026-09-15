<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Label extends AbstractResolver
{
    public function resolve(Node\Stmt\Label $node)
    {
        return null;
    }
}
