<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc\Doctrine;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DoctrineArgument extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\Doctrine\DoctrineArgument $node)
    {
        return null;
    }
}
