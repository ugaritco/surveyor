<?php

namespace Ugarit\Surveyor\NodeResolvers;

use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class InterpolatedStringPart extends AbstractResolver
{
    public function resolve(Node\InterpolatedStringPart $node)
    {
        return Type::string();
    }
}
