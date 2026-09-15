<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ThisTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ThisTypeNode $node)
    {
        if ($receiverType = $this->scope->getReceiverType()) {
            return $receiverType;
        }

        return Type::from($this->scope->entityName());
    }
}
