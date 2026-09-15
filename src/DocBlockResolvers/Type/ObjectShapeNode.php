<?php

namespace Ugarit\Surveyor\DocBlockResolvers\Type;

use Ugarit\Surveyor\DocBlockResolvers\AbstractResolver;
use Ugarit\Surveyor\Types\Type;
use PHPStan\PhpDocParser\Ast;

class ObjectShapeNode extends AbstractResolver
{
    public function resolve(Ast\Type\ObjectShapeNode $node)
    {
        $items = [];

        foreach ($node->items as $item) {
            [$key, $value] = $this->resolveItem($item);

            if ($key === null) {
                $items[] = $value;
            } else {
                $items[$key->value] = $value;
            }
        }

        return Type::array($items);
    }

    protected function resolveItem(Ast\Type\ObjectShapeItemNode $item)
    {
        $key = $this->from($item->keyName);
        $value = $this->from($item->valueType);

        if ($item->optional) {
            $value = $key ? $key->optional() : $value->optional();
        }

        return [$key, $value];
    }
}
