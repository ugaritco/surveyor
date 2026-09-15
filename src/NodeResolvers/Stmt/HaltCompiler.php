<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class HaltCompiler extends AbstractResolver
{
    public function resolve(Node\Stmt\HaltCompiler $node)
    {
        return null;
    }
}
