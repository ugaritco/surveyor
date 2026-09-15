<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\Result\VariableState;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Return_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Return_ $node)
    {
        $this->scope->state()->markSnapShotAsTerminated($node);

        $type = match (true) {
            $node->expr !== null => $this->from($node->expr),
            default => Type::void(),
        };

        if ($type instanceof VariableState) {
            $type = $type->type();
        }

        $this->scope->addReturnType(Type::collapse($type ?? Type::mixed()), $node->getStartLine());

        return null;
    }
}
