<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class PostDec extends AbstractResolver
{
    public function resolve(Node\Expr\PostDec $node)
    {
        return null;
    }
}
