<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class ConstTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ConstTypeNode $node)
    {
        return $this->from($node->constExpr);
    }
}
