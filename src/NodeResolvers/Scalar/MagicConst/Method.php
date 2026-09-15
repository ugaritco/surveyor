<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Method extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Method $node)
    {
        return Type::string($this->scope->methodName());
    }
}
