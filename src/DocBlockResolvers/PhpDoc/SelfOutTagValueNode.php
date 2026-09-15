<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class SelfOutTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\SelfOutTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
