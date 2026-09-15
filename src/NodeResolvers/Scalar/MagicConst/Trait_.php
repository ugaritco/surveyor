<?php

namespace Ugarit\Surveyor\NodeResolvers\Scalar\MagicConst;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Trait_ extends AbstractResolver
{
    public function resolve(Node\Scalar\MagicConst\Trait_ $node)
    {
        return Type::string($this->scope->entityName());
    }
}
