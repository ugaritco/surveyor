<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Use_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Use_ $node)
    {
        foreach ($node->uses as $use) {
            $this->scope->addUse($use->name->name, $use->alias?->name);
        }

        return null;
    }
}
