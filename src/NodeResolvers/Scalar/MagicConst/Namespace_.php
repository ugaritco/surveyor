<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Namespace_ extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Namespace_ $node)
    {
        return Type::string($this->scope->namespace());
    }
}
