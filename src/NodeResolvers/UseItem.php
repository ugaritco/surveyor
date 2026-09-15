<?php

namespace Ugarit\Surveyor\NodeResolvers;

use PhpParser\Node;

class UseItem extends AbstractResolver
{
    public function resolve(Node\UseItem $node)
    {
        return null;
    }
}
