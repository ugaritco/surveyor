<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class BitwiseXor extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\BitwiseXor $node)
    {
        return null;
    }
}
