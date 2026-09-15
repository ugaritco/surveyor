<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class PreInc extends AbstractResolver
{
    public function resolve(Node\Expr\PreInc $node)
    {
        return Type::int();
    }
}
