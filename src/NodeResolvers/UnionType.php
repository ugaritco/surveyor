<?php

namespace Ugarit\Surveyor\NodeResolvers;

use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class UnionType extends AbstractResolver
{
    public function resolve(Node\UnionType $node)
    {
        return Type::union(
            ...array_map(
                fn ($type) => $this->from($type),
                $node->types,
            ),
        );
    }
}
