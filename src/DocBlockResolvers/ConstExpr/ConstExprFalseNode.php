<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprFalseNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprFalseNode $node)
    {
        return Type::bool(false);
    }
}
