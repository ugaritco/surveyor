<?php

namespace Ugarit\Surveyor\DocBlockResolvers\PhpDoc;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class MixinTagValueNode extends AbstractResolver
{
    public function resolve(Ast\PhpDoc\MixinTagValueNode $node)
    {
        //
    }
}
