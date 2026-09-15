<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprTrueNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprTrueNode $node)
    {
        return Type::bool(true);
    }
}
