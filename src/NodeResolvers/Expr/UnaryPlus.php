<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class UnaryPlus extends AbstractResolver
{
    public function resolve(Node\Expr\UnaryPlus $node)
    {
        return Type::number();
    }
}
