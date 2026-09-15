<?php

namespace Ugarit\Surveyor\Concerns;

use Ugarit\Surveyor\Analysis\Resolver;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Parser\DocBlockParser;
use Ugarit\Surveyor\Parser\Parser;
use Ugarit\Surveyor\Resolvers\NodeResolver;

trait LazilyLoadsDependencies
{
    protected DocBlockParser $docBlockParser;

    protected NodeResolver $nodeResolver;

    protected Parser $parser;

    protected Analyzer $analyzer;

    protected Resolver $appResolver;

    protected function getDocBlockParser(): DocBlockParser
    {
        return $this->docBlockParser ??= app(DocBlockParser::class);
    }

    protected function getNodeResolver(): NodeResolver
    {
        return $this->nodeResolver ??= app(NodeResolver::class);
    }

    protected function getParser(): Parser
    {
        return $this->parser ??= app(Parser::class);
    }

    protected function getAnalyzer(): Analyzer
    {
        return $this->analyzer ??= app(Analyzer::class);
    }

    protected function getResolver(): Resolver
    {
        return $this->appResolver ??= app(Resolver::class);
    }
}
