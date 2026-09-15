<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class DoctrineConstExprStringNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\DoctrineConstExprStringNode $node)
    {
        return Type::string($node->value);
    }
}
