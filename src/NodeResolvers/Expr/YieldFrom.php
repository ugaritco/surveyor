<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class YieldFrom extends AbstractResolver
{
    public function resolve(Node\Expr\YieldFrom $node)
    {
        return null;
    }
}
