<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ObjectShapeItemNode extends AbstractResolver
{
    public function resolve(Ast\Type\ObjectShapeItemNode $node)
    {
        return null;
    }
}
