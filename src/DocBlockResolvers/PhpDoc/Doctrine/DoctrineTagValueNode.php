<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc\Doctrine;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class DoctrineTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\Doctrine\DoctrineTagValueNode $node)
    {
        return null;
    }
}
