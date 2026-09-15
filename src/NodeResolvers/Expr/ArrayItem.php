<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class ArrayItem extends AbstractResolver
{
    public function resolve(Node\Expr\ArrayItem $node)
    {
        return null;
    }
}
