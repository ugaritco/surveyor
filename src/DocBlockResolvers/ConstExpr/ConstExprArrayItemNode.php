<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprArrayItemNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprArrayItemNode $node)
    {
        return Type::arrayShape(Type::from($node->key), Type::from($node->value));
    }
}
