<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ReturnTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ReturnTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
