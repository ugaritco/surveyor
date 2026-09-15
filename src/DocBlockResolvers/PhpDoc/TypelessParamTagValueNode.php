<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class TypelessParamTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\TypelessParamTagValueNode $node)
    {
        return null;
    }
}
