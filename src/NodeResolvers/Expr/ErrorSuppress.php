<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class ErrorSuppress extends AbstractResolver
{
    public function resolve(Node\Expr\ErrorSuppress $node)
    {
        return $this->from($node->expr);
    }
}
