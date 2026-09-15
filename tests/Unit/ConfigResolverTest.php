<?php

use Ugarit\Surveyor\Analyzer\AnalyzedCache;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Types\MixedType;
use Ugarit\Surveyor\Types\StringType;

beforeEach(fn () => AnalyzedCache::clear());
afterEach(fn () => AnalyzedCache::clear());

it('resolves config()->string() to string', function () {
    $fixture = createPhpFixture('
namespace App;

class Test
{
    public function test()
    {
        return config()->string("app.name");
    }
}');

    $result = app(Analyzer::class)->analyze($fixture)->result();
    $returnType = $result->getMethod('test')->returnType();

    expect($returnType)->toBeInstanceOf(StringType::class);

    unlink($fixture);
});

it('resolves config() with a string key to mixed', function () {
    $fixture = createPhpFixture('
namespace App;

class Test
{
    public function test()
    {
        return config("app.name");
    }
}');

    $result = app(Analyzer::class)->analyze($fixture)->result();
    $returnType = $result->getMethod('test')->returnType();

    expect($returnType)->toBeInstanceOf(MixedType::class);

    unlink($fixture);
});
