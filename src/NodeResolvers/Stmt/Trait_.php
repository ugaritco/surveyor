<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\Analysis\EntityType;
use Ugarit\Surveyor\Analysis\Scope;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use PhpParser\Node;

class Trait_ extends AbstractResolver
{
    public function resolve(Node\Stmt\Trait_ $node)
    {
        $this->scope->setEntityName($node->namespacedName->name);
        $this->scope->setEntityType(EntityType::TRAIT_TYPE);

        return null;
    }

    public function scope(): Scope
    {
        return $this->scope->newChildScope();
    }
}
