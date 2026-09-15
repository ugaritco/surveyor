<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class LogicalOr extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\LogicalOr $node)
    {
        return Type::bool();
    }
}
