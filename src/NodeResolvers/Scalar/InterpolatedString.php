<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class InterpolatedString extends AbstractResolver
{
    public function resolve(Node\Scalar\InterpolatedString $node)
    {
        return Type::string();
    }
}
