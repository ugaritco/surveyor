<?php

namespace Ugarit\Surveyor\NodeResolvers\Stmt;

use Ugarit\Surveyor\Analyzed\ClassLikeResult;
use Ugarit\Surveyor\Analyzed\PropertyResult;
use Ugarit\Surveyor\NodeResolvers\AbstractResolver;
use Ugarit\Surveyor\NodeResolvers\Shared\ResolvesIgnoreMarkers;
use Ugarit\Surveyor\Types\Type;
use PhpParser\Node;

class Property extends AbstractResolver
{
    use ResolvesIgnoreMarkers;

    public function resolve(Node\Stmt\Property $node)
    {
        foreach ($node->props as $prop) {
            $types = [];

            if ($node->getDocComment()) {
                $docType = $this->docBlockParser->parseVar($node->getDocComment());

                if ($docType) {
                    $types[] = $docType;
                }
            }

            if ($node->type) {
                $types[] = $this->from($node->type);
            }

            if (empty($types) && $prop->default) {
                $types[] = $this->from($prop->default);
            }

            $unionType = Type::union(...$types);

            $this->scope->state()->add(
                $prop,
                $unionType,
            );

            $result = $this->scope->result();

            if (! $result instanceof ClassLikeResult) {
                continue;
            }

            $result->addProperty(
                new PropertyResult(
                    name: $prop->name,
                    type: $unionType,
                    visibility: match (true) {
                        $node->isProtected() => 'protected',
                        $node->isPrivate() => 'private',
                        default => 'public',
                    },
                    fromDocBlock: $node->getDocComment() ? true : false,
                    ignore: $this->ignoreMarker($node),
                ),
            );
        }

        return null;
    }
}
