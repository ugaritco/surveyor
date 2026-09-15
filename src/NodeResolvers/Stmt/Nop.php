<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Nop extends AbstractResolver
{
    public function resolve(Node\Stmt\Nop $node)
    {
        return null;
    }
}
