<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Plus extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Plus $node)
    {
        return null;
    }
}
