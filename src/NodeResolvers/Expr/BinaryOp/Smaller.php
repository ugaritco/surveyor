<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Smaller extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Smaller $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\BinaryOp\Smaller $node)
    {
        return null;
    }
}
