<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Comment;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use PHPStan\PhpDocParser\Ast;

class Comment extends AbstractResolver
{
    public function resolve(Ast\Comment $node)
    {
        return null;
    }
}
