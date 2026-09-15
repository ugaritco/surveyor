<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Block extends AbstractResolver
{
    public function resolve(Node\Stmt\Block $node)
    {
        return null;
    }
}
