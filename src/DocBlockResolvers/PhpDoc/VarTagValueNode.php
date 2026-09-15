<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class VarTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\VarTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
