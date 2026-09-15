<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class UnionTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\UnionTypeNode $node)
    {
        return Type::union(...array_map(fn ($type) => $this->from($type), $node->types));
    }
}
