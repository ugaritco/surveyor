<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ArrayShapeUnsealedTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ArrayShapeUnsealedTypeNode $node)
    {
        return Type::arrayShape($this->from($node->keyType), $this->from($node->valueType));
    }
}
