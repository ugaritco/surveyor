<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Void_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\Void_ $node)
    {
        return Type::void();
    }
}
