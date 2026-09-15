<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class BitwiseNot extends AbstractResolver
{
    public function resolve(Node\Expr\BitwiseNot $node)
    {
        return Type::int();
    }
}
