<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesPropertyFetches;
use PhpParser\Node;

class NullsafePropertyFetch extends AbstractResolver
{
    use ResolvesPropertyFetches;

    public function resolve(Node\Expr\NullsafePropertyFetch $node)
    {
        return $this->resolvePropertyFetch($node);
    }
}
