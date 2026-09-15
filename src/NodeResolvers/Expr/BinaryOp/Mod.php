<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Mod extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Mod $node)
    {
        return Type::number();
    }

    public function resolveForCondition(Node\Expr\BinaryOp\Mod $node)
    {
        //
    }
}
