<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Ugarit\Surveyor\Analysis\Condition;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\CapturesConditionalChanges;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Match_ extends AbstractResolver
{
    use CapturesConditionalChanges;

    public function resolve(Node\Expr\Match_ $node)
    {
        $this->scope->startConditionAnalysis();
        $this->from($node->cond);
        $this->scope->endConditionAnalysis();

        $currentConditions = [];

        foreach ($node->arms as $arm) {
            if ($arm->conds === null) {
                continue;
            }

            foreach ($arm->conds as $cond) {
                $this->scope->startConditionAnalysis();
                $currentConditions[] = $this->from($cond);
                $this->scope->endConditionAnalysis();

                $this->startCapturing($arm);
                $this->from($arm->body);
                $this->capture($arm);
            }
        }

        return Type::union(...array_map(
            fn ($t) => $this->resolveForUnion($t),
            array_filter($currentConditions),
        ));
    }

    protected function resolveForUnion($item)
    {
        if ($item instanceof Condition) {
            return $item->type;
        }

        return $item;
    }
}
