<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Line extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Line $node)
    {
        return Type::int();
    }
}
