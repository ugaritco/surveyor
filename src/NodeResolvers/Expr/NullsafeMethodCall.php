<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesMethodCalls;
use PhpParser\Node;

class NullsafeMethodCall extends AbstractResolver
{
    use ResolvesMethodCalls;

    public function resolve(Node\Expr\NullsafeMethodCall $node)
    {
        $result = $this->resolveMethodCall($node);

        return $result->nullable();
    }
}
