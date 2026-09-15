<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprNullNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprNullNode $node)
    {
        return Type::null();
    }
}
