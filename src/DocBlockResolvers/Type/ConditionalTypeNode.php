<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ConditionalTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ConditionalTypeNode $node)
    {
        return Type::union($this->from($node->if), $this->from($node->else));
    }
}
