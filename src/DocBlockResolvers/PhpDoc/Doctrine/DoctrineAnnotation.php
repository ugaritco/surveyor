<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc\Doctrine;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DoctrineAnnotation extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\Doctrine\DoctrineAnnotation $node)
    {
        return null;
    }
}
