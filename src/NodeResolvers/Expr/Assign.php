<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesAssigns;
use PhpParser\Node;

class Assign extends AbstractResolver
{
    use ResolvesAssigns;

    public function resolve(Node\Expr\Assign $node)
    {
        return $this->resolveAssign($node);
    }

    public function resolveForCondition(Node\Expr\Assign $node)
    {
        $this->scope->pauseConditionAnalysis();
        $this->resolve($node);
        $this->scope->resumeConditionAnalysis();

        if (
            $node->var instanceof Node\Expr\Variable
            || $node->var instanceof Node\Expr\PropertyFetch
            || $node->var instanceof Node\Expr\StaticPropertyFetch
        ) {
            $result = $this->from($node->expr) ?? $this->fromOutsideOfCondition($node->expr);

            if ($result === null) {
                return null;
            }

            return new Condition($node->var, $result);
        }

        if ($node->var instanceof Node\Expr\ArrayDimFetch) {
            return new Condition($node->var, $this->from($node->expr));
        }
    }
}
