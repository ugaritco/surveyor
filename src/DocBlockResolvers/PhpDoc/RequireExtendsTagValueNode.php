<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class RequireExtendsTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\RequireExtendsTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
