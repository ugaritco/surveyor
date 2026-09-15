<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class PreDec extends AbstractResolver
{
    public function resolve(Node\Expr\PreDec $node)
    {
        return null;
    }
}
