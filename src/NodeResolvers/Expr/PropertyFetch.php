<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesPropertyFetches;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class PropertyFetch extends AbstractResolver
{
    use ResolvesPropertyFetches;

    public function resolve(Node\Expr\PropertyFetch $node)
    {
        return $this->resolvePropertyFetch($node) ?? Type::mixed();
    }

    public function resolveForCondition(Node\Expr\PropertyFetch $node)
    {
        $type = $this->resolve($node);

        return new Condition($node, $type);
    }
}
