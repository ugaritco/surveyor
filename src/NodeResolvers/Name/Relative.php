<?php

namespace Ugarit\Surveyor\NodeResolvers\Name;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Relative extends AbstractResolver
{
    public function resolve(Node\Name\Relative $node)
    {
        return $this->scope->getUse($node->name);
    }
}
