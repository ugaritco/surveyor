<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ParamLaterInvokedCallableTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ParamLaterInvokedCallableTagValueNode $node)
    {
        return null;
    }
}
