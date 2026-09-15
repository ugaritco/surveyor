<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ParamImmediatelyInvokedCallableTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ParamImmediatelyInvokedCallableTagValueNode $node)
    {
        return null;
    }
}
