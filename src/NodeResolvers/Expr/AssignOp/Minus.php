<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Minus extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Minus $node)
    {
        return null;
    }
}
