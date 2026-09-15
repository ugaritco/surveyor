<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class ShiftRight extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\ShiftRight $node)
    {
        return null;
    }
}
