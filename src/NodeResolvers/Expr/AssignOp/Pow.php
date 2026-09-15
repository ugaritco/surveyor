<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Pow extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Pow $node)
    {
        return null;
    }
}
