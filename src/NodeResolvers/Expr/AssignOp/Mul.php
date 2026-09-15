<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Mul extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Mul $node)
    {
        return null;
    }
}
