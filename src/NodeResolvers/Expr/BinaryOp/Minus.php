<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Minus extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Minus $node)
    {
        return Type::number();
    }
}
