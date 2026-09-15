<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Property extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Property $node)
    {
        return Type::string();
    }
}
