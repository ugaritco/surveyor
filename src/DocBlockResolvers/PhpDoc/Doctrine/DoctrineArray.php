<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc\Doctrine;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DoctrineArray extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\Doctrine\DoctrineArray $node)
    {
        return null;
    }
}
