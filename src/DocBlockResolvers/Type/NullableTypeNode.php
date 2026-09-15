<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class NullableTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\NullableTypeNode $node)
    {
        $type = $this->from($node->type);

        return $type->nullable();
    }
}
