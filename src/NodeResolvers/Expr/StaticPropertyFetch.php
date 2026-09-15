<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesPropertyFetches;
use PhpParser\Node;

class StaticPropertyFetch extends AbstractResolver
{
    use ResolvesPropertyFetches;

    public function resolve(Node\Expr\StaticPropertyFetch $node)
    {
        return $this->resolvePropertyFetch($node);
    }

    public function resolveForCondition(Node\Expr\StaticPropertyFetch $node)
    {
        return $this->resolve($node);
    }
}
