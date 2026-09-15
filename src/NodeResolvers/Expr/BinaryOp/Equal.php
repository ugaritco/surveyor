<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Equal extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Equal $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\BinaryOp\Equal $node)
    {
        $left = $this->from($node->left);
        $right = $this->from($node->right);

        if ($left instanceof Condition) {
            $this->scope->state()->narrow($left->node, $left->apply(), $node);
        }

        if ($right instanceof Condition) {
            $this->scope->state()->narrow($right->node, $right->apply(), $node);
        }
    }
}
