<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class PostInc extends AbstractResolver
{
    public function resolve(Node\Expr\PostInc $node)
    {
        return Type::int();
    }
}
