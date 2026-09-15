<?php

namespace Ugarit\Surveyor;

use Heritage\Support\ServiceProvider;
use Ugarit\Surveyor\Analysis\Resolver;
use Ugarit\Surveyor\Analyzer\AnalyzedCache;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Analyzer\ArrayableResolver;
use Ugarit\Surveyor\Analyzer\ResourceAnalyzer;
use Ugarit\Surveyor\Parser\DocBlockParser;
use Ugarit\Surveyor\Resolvers\DocBlockResolver;
use Ugarit\Surveyor\Resolvers\NodeResolver;
use PhpParser\Parser as PhpParserParser;
use PhpParser\ParserFactory;

class SurveyorServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DocBlockParser::class);
        $this->app->singleton(NodeResolver::class);
        $this->app->singleton(DocBlockResolver::class);
        $this->app->singleton(Analyzer::class);
        $this->app->singleton(ArrayableResolver::class);
        $this->app->singleton(ResourceAnalyzer::class);
        $this->app->singleton(Resolver::class);
        $this->app->singleton(PhpParserParser::class, function () {
            return (new ParserFactory)->createForHostVersion();
        });
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureCaching();
    }

    protected function configureCaching()
    {
        if (env('SURVEYOR_CACHE_ENABLED', false)) {
            $cacheDir = env('SURVEYOR_CACHE_DIR', storage_path('surveyor-cache'));
            AnalyzedCache::setCacheDirectory($cacheDir);

            if ($key = env('SURVEYOR_CACHE_KEY', $this->app['config']['app.key'] ?? '')) {
                AnalyzedCache::setKey($key);
            }

            AnalyzedCache::enable();
        }
    }
}
