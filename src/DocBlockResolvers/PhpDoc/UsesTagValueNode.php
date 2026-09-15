<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class UsesTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\UsesTagValueNode $node)
    {
        return null;
    }
}
