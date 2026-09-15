<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprFloatNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprFloatNode $node)
    {
        return Type::float((float) str_replace('_', '', $node->value));
    }
}
