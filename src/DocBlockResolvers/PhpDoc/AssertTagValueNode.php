<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class AssertTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\AssertTagValueNode $node)
    {
        return null;
    }
}
