<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\CapturesConditionalChanges;
use PhpParser\Node;
use PhpParser\NodeAbstract;

class ElseIf_ extends AbstractResolver
{
    use CapturesConditionalChanges;

    public function resolve(Node\Stmt\ElseIf_ $node)
    {
        $this->startCapturing($node);

        // Analyze the condition for type narrowing
        $this->scope->startConditionAnalysis();
        $this->from($node->cond);
        $this->scope->endConditionAnalysis();
    }

    public function onExit(NodeAbstract $node)
    {
        $this->capture($node);
    }
}
