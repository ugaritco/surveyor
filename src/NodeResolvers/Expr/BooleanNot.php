<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class BooleanNot extends AbstractResolver
{
    public function resolve(Node\Expr\BooleanNot $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\BooleanNot $node)
    {
        $type = $this->from($node->expr);

        if (! $type instanceof Condition) {
            // Nothing useful came out of the expression, so nothing to do
            return;
        }

        return $type->toggle();
    }
}
