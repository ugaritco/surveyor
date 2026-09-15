<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr\Cast;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\StringType;
use Ugarit\Surveyor\Types\UnionType;
use PhpParser\Node;

class String_ extends AbstractResolver
{
    public function resolve(Node\Expr\Cast\String_ $node)
    {
        $type = $this->from($node->expr);

        if ($type instanceof UnionType) {
            $stringTypes = array_filter(
                $type->types,
                fn ($t) => $t instanceof StringType,
            );

            if (count($stringTypes) === 1) {
                return array_values($stringTypes)[0];
            }
        }

        return new StringType;
    }
}
