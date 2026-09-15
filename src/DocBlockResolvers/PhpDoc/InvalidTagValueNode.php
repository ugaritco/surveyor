<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class InvalidTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\InvalidTagValueNode $node)
    {
        return null;
    }
}
