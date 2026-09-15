<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesMethodCalls;
use PhpParser\Node;

class MethodCall extends AbstractResolver
{
    use ResolvesMethodCalls;

    public function resolve(Node\Expr\MethodCall $node)
    {
        return $this->resolveMethodCall($node);
    }

    public function resolveForCondition(Node\Expr\MethodCall $node)
    {
        return $this->resolve($node);
    }
}
