<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ArrayTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ArrayTypeNode $node)
    {
        return Type::arrayShape(Type::int(), $this->from($node->type));
    }
}
