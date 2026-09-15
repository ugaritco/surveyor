<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ParamTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\ParamTagValueNode $node)
    {
        return $this->from($node->type);
    }
}
