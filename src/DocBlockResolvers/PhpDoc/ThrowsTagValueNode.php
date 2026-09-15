<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ThrowsTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ThrowsTagValueNode $node)
    {
        return null;
    }
}
