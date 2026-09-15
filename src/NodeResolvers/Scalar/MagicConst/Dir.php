<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Dir extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Dir $node)
    {
        return Type::string(dirname($this->scope->fullPath()));
    }
}
