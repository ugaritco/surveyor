<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class For_ extends AbstractResolver
{
    public function resolve(Node\Stmt\For_ $node)
    {
        foreach ($node->init as $init) {
            $this->from($init);
        }

        return null;
    }
}
