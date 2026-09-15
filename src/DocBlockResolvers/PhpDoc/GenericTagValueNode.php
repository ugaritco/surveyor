<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class GenericTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\GenericTagValueNode $node)
    {
        return null;
    }
}
