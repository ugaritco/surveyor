<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprStringNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprStringNode $node)
    {
        return Type::string($node->value);
    }
}
