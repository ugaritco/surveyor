<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class AssertTagMethodValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\AssertTagMethodValueNode $node)
    {
        return null;
    }
}
