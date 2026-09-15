<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\StringType;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Concat extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Concat $node)
    {
        $left = $this->from($node->left) ?? Type::string();
        $right = $this->from($node->right) ?? Type::string();

        if (Type::is($left, StringType::class) && Type::is($right, StringType::class)) {
            return Type::string($left->value.$right->value);
        }

        return Type::string();
    }
}
