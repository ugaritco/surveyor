<?php

namespace Ugarit\Surveyor\DocBlockResolvers\ConstExpr;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConstExprArrayNode extends AbstractResolver
{
    public function resolve(Ast\ConstExpr\ConstExprArrayNode $node)
    {
        return Type::array(
            array_map(
                fn ($item) => $this->from($item),
                $node->items,
            ),
        );
    }
}
