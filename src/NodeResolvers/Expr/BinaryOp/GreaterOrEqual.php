<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class GreaterOrEqual extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\GreaterOrEqual $node)
    {
        return Type::bool();
    }

    public function resolveForCondition(Node\Expr\BinaryOp\GreaterOrEqual $node)
    {
        return null;
    }
}
