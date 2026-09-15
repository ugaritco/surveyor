<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class IntersectionTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\IntersectionTypeNode $node)
    {
        return Type::intersection(
            ...array_map(
                fn ($type) => $this->from($type),
                $node->types,
            ),
        );
    }
}
