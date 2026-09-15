<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class ConstFetch extends AbstractResolver
{
    public function resolve(Node\Expr\ConstFetch $node)
    {
        return Type::from($node->name->toString());
    }

    public function resolveForCondition(Node\Expr\ConstFetch $node)
    {
        return Type::from($node->name->toString());
    }
}
