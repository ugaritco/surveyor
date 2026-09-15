<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Pow extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Pow $node)
    {
        return null;
    }
}
