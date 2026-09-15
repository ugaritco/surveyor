<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\CapturesConditionalChanges;
use PhpParser\Node;
use PhpParser\NodeAbstract;

class Else_ extends AbstractResolver
{
    use CapturesConditionalChanges;

    public function resolve(Node\Stmt\Else_ $node)
    {
        $this->startCapturing($node);
    }

    public function onExit(NodeAbstract $node)
    {
        $this->capture($node);
    }
}
