<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class File extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\File $node)
    {
        return Type::string();
    }
}
