<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Coalesce extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Coalesce $node)
    {
        $left = $this->from($node->left);
        $right = $this->from($node->right);

        if ($left instanceof Condition) {
            $left = $left->apply();
        }

        if ($right instanceof Condition) {
            $right = $right->apply();
        }

        return Type::union($left, $right);
    }

    public function resolveForCondition(Node\Expr\BinaryOp\Coalesce $node)
    {
        return $this->resolve($node);
    }
}
