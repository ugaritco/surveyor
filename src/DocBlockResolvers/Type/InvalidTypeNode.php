<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class InvalidTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\InvalidTypeNode $node)
    {
        return null;
    }
}
