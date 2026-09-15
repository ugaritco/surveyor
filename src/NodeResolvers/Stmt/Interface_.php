<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\Analysis\EntityType;
use Ugarit\Surveyor\Analyzed\ClassLikeResult;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ParsesClassLikeDocBlock;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesIgnoreMarkers;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;
use Throwable;

class Interface_ extends AbstractResolver
{
    use ParsesClassLikeDocBlock;
    use ResolvesIgnoreMarkers;

    public function resolve(Node\Stmt\Interface_ $node)
    {
        $this->scope->setEntityName($node->namespacedName->name);
        $this->scope->setEntityType(EntityType::INTERFACE_TYPE);

        $this->parseExtends($node);

        $result = new ClassLikeResult(
            name: $this->scope->entityName(),
            namespace: $this->scope->namespace(),
            extends: $this->scope->extends(),
            implements: $this->scope->implements(),
            uses: $this->scope->uses(),
            filePath: $this->scope->fullPath(),
            entityType: EntityType::INTERFACE_TYPE,
        );

        if ($marker = $this->ignoreMarker($node)) {
            $result->flagAsIgnored($marker);
        }

        $this->scope->attachResult($result);

        $this->parseClassLikeDocBlock($node, $result);

        return null;
    }

    protected function parseExtends(Node\Stmt\Interface_ $node)
    {
        foreach ($node->extends as $extend) {
            $this->scope->addExtend($extend->toString());

            try {
                $reflection = $this->reflector->reflectClass($extend->toString());
            } catch (Throwable $e) {
                continue;
            }

            // Interfaces support multiple inheritance — flatten the full
            // ancestor set so consumers can ask `$result->extends($parent)`
            // for any transitive parent.
            foreach ($reflection->getInterfaceNames() as $name) {
                $this->scope->addExtend($name);
            }

            foreach ($reflection->getConstants() as $key => $value) {
                $this->scope->addConstant($key, Type::from($value));
            }
        }
    }
}
