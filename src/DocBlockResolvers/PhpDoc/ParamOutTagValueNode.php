<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ParamOutTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ParamOutTagValueNode $node)
    {
        return null;
    }
}
