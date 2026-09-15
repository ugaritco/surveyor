<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Double extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Double $node)
    {
        return Type::float();
    }
}
