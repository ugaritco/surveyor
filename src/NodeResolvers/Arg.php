<?php

namespace Ugarit\Surveyor\NodeResolvers;

use PhpParser\Node;

class Arg extends AbstractResolver
{
    public function resolve(Node\Arg $node)
    {
        return null;
    }
}
