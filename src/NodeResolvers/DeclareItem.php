<?php

namespace Ugarit\Surveyor\NodeResolvers;

use PhpParser\Node;

class DeclareItem extends AbstractResolver
{
    public function resolve(Node\DeclareItem $node)
    {
        return null;
    }
}
