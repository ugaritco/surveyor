<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class OffsetAccessTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\OffsetAccessTypeNode $node)
    {
        return null;
    }
}
