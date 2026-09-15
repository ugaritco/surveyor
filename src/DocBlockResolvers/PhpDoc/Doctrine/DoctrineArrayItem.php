<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc\Doctrine;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DoctrineArrayItem extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\Doctrine\DoctrineArrayItem $node)
    {
        return null;
    }
}
