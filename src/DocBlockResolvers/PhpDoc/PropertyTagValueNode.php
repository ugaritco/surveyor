<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class PropertyTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\PropertyTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
