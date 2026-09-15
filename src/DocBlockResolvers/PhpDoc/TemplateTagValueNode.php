<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\TemplateTagType;
use PHPStan\PhpDocParser\Ast;

class TemplateTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\TemplateTagValueNode $node)
    {
        return new TemplateTagType(
            $node->name,
            $node->bound ? $this->from($node->bound) : null,
            $node->default ? $this->from($node->default) : null,
            $node->lowerBound ? $this->from($node->lowerBound) : null,
            $node->description,
        );
    }
}
