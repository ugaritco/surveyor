<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Div extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Div $node)
    {
        return null;
    }
}
