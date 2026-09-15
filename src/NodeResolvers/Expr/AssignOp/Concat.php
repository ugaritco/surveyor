<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\AssignOp;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Concat extends AbstractResolver
{
    public function resolve(Node\Expr\AssignOp\Concat $node)
    {
        return Type::string();
    }
}
