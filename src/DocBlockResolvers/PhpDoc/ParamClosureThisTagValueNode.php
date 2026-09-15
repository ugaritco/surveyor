<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ParamClosureThisTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ParamClosureThisTagValueNode $node)
    {
        return null;
    }
}
