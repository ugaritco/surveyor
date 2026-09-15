<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class SmallerOrEqual extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\SmallerOrEqual $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\BinaryOp\SmallerOrEqual $node)
    {
        return null;
    }
}
