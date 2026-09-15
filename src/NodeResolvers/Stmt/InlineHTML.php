<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class InlineHTML extends AbstractResolver
{
    public function resolve(Node\Stmt\InlineHTML $node)
    {
        return null;
    }
}
