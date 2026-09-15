<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DeprecatedTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\DeprecatedTagValueNode $node)
    {
        return null;
    }
}
