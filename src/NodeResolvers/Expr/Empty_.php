<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Contracts\Type as TypeContract;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Empty_ extends AbstractResolver
{
    public function resolve(Node\Expr\Empty_ $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\Empty_ $node)
    {
        $type = $this->from($node->expr);

        if (! $type instanceof Condition) {
            return null;
        }

        return $type
            ->whenTrue(fn ($_, TypeContract $type) => $type->nullable(true))
            ->whenFalse(fn ($_, TypeContract $type) => $type->nullable(false))
            ->makeTrue();
    }
}
