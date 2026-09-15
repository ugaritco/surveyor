<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class TypeAliasImportTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\TypeAliasImportTagValueNode $node)
    {
        return null;
    }
}
