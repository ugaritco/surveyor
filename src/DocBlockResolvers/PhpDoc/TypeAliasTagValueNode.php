<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class TypeAliasTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\TypeAliasTagValueNode $node)
    {
        return null;
    }
}
