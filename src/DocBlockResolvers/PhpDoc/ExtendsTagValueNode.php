<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ExtendsTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ExtendsTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
