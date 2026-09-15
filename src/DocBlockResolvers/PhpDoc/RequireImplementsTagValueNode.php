<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class RequireImplementsTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\RequireImplementsTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
