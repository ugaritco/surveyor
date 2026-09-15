<?php

namespace Ugarit\Surveyor\NodeResolvers\Expr;

use Heritage\Database\Eloquent\Casts\Attribute;
use Heritage\Http\Resources\Json\JsonResource;
use Ugarit\Surveyor\Analyzer\ResourceAnalyzer;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesClosureReturnTypes;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesEloquentAttributes;
use Ugarit\Surveyor\Types\ClassType;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;
use Throwable;

class New_ extends AbstractResolver
{
    use ResolvesClosureReturnTypes, ResolvesEloquentAttributes;

    public function resolve(Node\Expr\New_ $node)
    {
        $type = $this->from($node->class);

        if (! property_exists($type, 'value') || $type->value === null) {
            // We couldn't figure it out
            return Type::mixed();
        }

        $classType = new ClassType($this->scope->getUse($type->value));

        if ($classType->resolved() === Attribute::class) {
            return $this->attributeTypeFrom($node->args);
        }

        $classType->setConstructorArguments(array_map(
            fn ($arg) => $this->from($arg->value),
            $node->args,
        ));

        // Check if this is a resource class instantiation
        $resolved = $classType->resolved();

        if (class_exists($resolved) && is_subclass_of($resolved, JsonResource::class)) {
            try {
                $resourceResponse = app(ResourceAnalyzer::class)->buildResourceResponse($resolved);

                if ($resourceResponse) {
                    return $resourceResponse;
                }
            } catch (Throwable $e) {
                // Fall through to return plain ClassType
            }
        }

        return $classType;
    }

    public function resolveForCondition(Node\Expr\New_ $node)
    {
        return $this->resolve($node);
    }
}
