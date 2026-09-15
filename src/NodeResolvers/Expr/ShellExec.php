<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class ShellExec extends AbstractResolver
{
    public function resolve(Node\Expr\ShellExec $node)
    {
        return Type::mixed();
    }
}
