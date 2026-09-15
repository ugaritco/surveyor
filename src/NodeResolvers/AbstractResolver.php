<?php

namespace Ugarit\Surveyor\NodeResolvers;

use Ugarit\Surveyor\Analysis\Scope;
use Ugarit\Surveyor\Debug\Debug;
use Ugarit\Surveyor\Parser\DocBlockParser;
use Ugarit\Surveyor\Reflector\Reflector;
use Ugarit\Surveyor\Resolvers\NodeResolver;
use PhpParser\NodeAbstract;

/**
 * Every resolver implements resolve(), but each one narrows the parameter to
 * the node type it handles, so the base class cannot declare it without
 * breaking parameter contravariance.
 *
 * @method mixed resolve(NodeAbstract $node)
 */
abstract class AbstractResolver
{
    protected Scope $scope;

    public function __construct(
        protected NodeResolver $resolver,
        protected DocBlockParser $docBlockParser,
        protected Reflector $reflector,
    ) {
        //
    }

    public function setScope(Scope $scope)
    {
        $this->scope = $scope;
        $this->reflector->setScope($scope);
        $this->docBlockParser->setScope($scope);
    }

    public function onExit(NodeAbstract $node)
    {
        //
    }

    public function exitScope(): Scope
    {
        return $this->scope;
    }

    protected function from(NodeAbstract $node)
    {
        if (Debug::$logLevel >= Debug::TRACE) {
            Debug::log('🔍 Analyzing Node: '.$node->getType());
        }

        return $this->resolver->from($node, $this->scope);
    }

    protected function fromOutsideOfCondition(NodeAbstract $node)
    {
        $this->scope->pauseConditionAnalysis();
        $result = $this->from($node);
        $this->scope->resumeConditionAnalysis();

        return $result;
    }

    public function scope(): Scope
    {
        return $this->scope;
    }
}
