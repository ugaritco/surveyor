<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\BinaryOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Spaceship extends AbstractResolver
{
    public function resolve(Node\Expr\BinaryOp\Spaceship $node)
    {
        return Type::number();
    }
}
