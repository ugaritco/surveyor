<?php

namespace Ugarit\Surveyor\Analyzed;

use Ugarit\Surveyor\Concerns\HasIgnoreMarker;
use Ugarit\Surveyor\Types\Contracts\Type;

class PropertyResult
{
    use HasIgnoreMarker;

    public function __construct(
        public readonly string $name,
        public readonly ?Type $type,
        public readonly string $visibility = 'public',
        public readonly bool $fromDocBlock = false,
        public readonly bool $modelAttribute = false,
        public readonly bool $modelRelation = false,
        public readonly bool $readOnly = false,
        public readonly bool $writeOnly = false,
        ?IgnoreMarker $ignore = null,
    ) {
        $this->ignore = $ignore;
    }
}
