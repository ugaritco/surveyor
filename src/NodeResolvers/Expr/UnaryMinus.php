<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Contracts\MultiType;
use Ugarit\Surveyor\Types\Contracts\Type as TypeContract;
use Ugarit\Surveyor\Types\FloatType;
use Ugarit\Surveyor\Types\IntType;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class UnaryMinus extends AbstractResolver
{
    public function resolve(Node\Expr\UnaryMinus $node)
    {
        $result = $this->from($node->expr);

        if ($result instanceof MultiType) {
            return Type::union(...array_map(
                fn ($type) => $this->negate($type),
                $result->getTypes(),
            ));
        }

        return $this->negate($result);
    }

    protected function negate(?TypeContract $type): ?TypeContract
    {
        if (! $type instanceof IntType && ! $type instanceof FloatType) {
            return $type;
        }

        if ($type->value === null) {
            return $type;
        }

        $class = $type::class;

        return new $class($type->value * -1);
    }
}
