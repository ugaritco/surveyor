<?php

namespace Ugarit\Surveyor\NodeResolvers;

use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class VarLikeIdentifier extends AbstractResolver
{
    public function resolve(Node\VarLikeIdentifier $node)
    {
        return Type::from($node->name);
    }
}
