<?php

namespace Ugarit\Surveyor\Resolvers;

use Heritage\Container\Container;
use Ugarit\Surveyor\Analysis\Scope;
use Ugarit\Surveyor\Reflector\Reflector;
use PhpParser\Node\Expr\CallLike;
use PHPStan\PhpDocParser\Ast\Node;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocNode;

class DocBlockResolver
{
    protected PhpDocNode $parsed;

    protected ?CallLike $referenceNode = null;

    protected array $resolved = [];

    public function __construct(
        protected Container $container,
        protected Reflector $reflector,
    ) {
        //
    }

    public function setReferenceNode(?CallLike $node = null): self
    {
        $this->referenceNode = $node;

        return $this;
    }

    public function setParsed(PhpDocNode $parsed): self
    {
        $this->parsed = $parsed;

        return $this;
    }

    public function from(Node $node, Scope $scope)
    {
        $className = $this->getClassName($node);

        return (new $className(
            $this,
            $this->parsed,
            $this->referenceNode,
            $scope,
            $this->reflector,
        ))->resolve($node);
    }

    protected function getClassName(Node $node)
    {
        return $this->resolved[get_class($node)] ??= str(get_class($node))
            ->after('Ast\\')
            ->prepend('Ugarit\\Surveyor\\DocBlockResolvers\\')
            ->toString();
    }
}
