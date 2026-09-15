<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ArrayShapeItemNode extends AbstractResolver
{
    public function resolve(Ast\Type\ArrayShapeItemNode $node)
    {
        return null;
    }
}
