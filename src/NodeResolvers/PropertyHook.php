<?php

namespace Ugarit\Surveyor\NodeResolvers;

use PhpParser\Node;

class PropertyHook extends AbstractResolver
{
    public function resolve(Node\PropertyHook $node)
    {
        return null;
    }
}
