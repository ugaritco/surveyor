<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\ClassType;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Instanceof_ extends AbstractResolver
{
    public function resolve(Node\Expr\Instanceof_ $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\Instanceof_ $node)
    {
        if (! $node->class instanceof Node\Name) {
            return null;
        }

        $className = $node->class->toString();
        $fullClassName = $this->scope->getUse($className);

        return Condition::from($node->expr, new ClassType($fullClassName))
            ->whenTrue(fn (Condition $c) => $c->setType(new ClassType($fullClassName)))
            ->whenFalse(fn (Condition $c) => $c->removeType(new ClassType($fullClassName)))
            ->makeTrue();
    }
}
