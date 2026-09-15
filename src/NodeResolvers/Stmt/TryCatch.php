<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class TryCatch extends AbstractResolver
{
    public function resolve(Node\Stmt\TryCatch $node)
    {
        return null;
    }
}
