<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\ArrayShapeType;
use Ugarit\Surveyor\Types\ArrayType;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class ArrayDimFetch extends AbstractResolver
{
    public function resolve(Node\Expr\ArrayDimFetch $node)
    {
        $var = $this->from($node->var);
        $dim = $node->dim === null ? Type::int() : $this->from($node->dim);

        if ($var instanceof Condition) {
            $var = $var->type;
        }

        if (! Type::is($var, ArrayType::class, ArrayShapeType::class)) {
            return Type::mixed();
        }

        if (Type::is($var, ArrayShapeType::class)) {
            return $var->valueType;
        }

        if (property_exists($dim, 'value')) {
            $type = $var->value[$dim->value] ?? null;

            if ($type === null) {
                return Type::mixed();
            }

            return Type::from($type);
        }

        return Type::mixed();
    }

    public function resolveForCondition(Node\Expr\ArrayDimFetch $node)
    {
        return new Condition($node->var, $this->resolve($node));
    }
}
