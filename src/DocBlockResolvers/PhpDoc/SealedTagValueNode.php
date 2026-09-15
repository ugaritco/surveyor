<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class SealedTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\SealedTagValueNode $node)
    {
        return null;
    }
}
