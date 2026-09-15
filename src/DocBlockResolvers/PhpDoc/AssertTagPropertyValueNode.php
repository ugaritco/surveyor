<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class AssertTagPropertyValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\AssertTagPropertyValueNode $node)
    {
        return null;
    }
}
