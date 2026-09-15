<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class IdentifierTypeNode extends AbstractResolver
{
    public function resolve(Ast\Type\IdentifierTypeNode $node)
    {
        $name = (string) $node->name;

        foreach ($this->scope->getTemplateTags() as $templateTag) {
            if ($templateTag->name === $name) {
                return $templateTag->bound;
            }
        }

        return Type::from($this->scope->getUse($name));
    }
}
