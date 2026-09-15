<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ImplementsTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ImplementsTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
