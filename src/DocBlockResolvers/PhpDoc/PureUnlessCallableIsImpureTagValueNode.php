<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class PureUnlessCallableIsImpureTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\PureUnlessCallableIsImpureTagValueNode $node)
    {
        return null;
    }
}
