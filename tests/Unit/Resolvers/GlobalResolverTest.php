<?php

use Ugarit\Surveyor\Analyzer\AnalyzedCache;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Debug\Debug;
use Ugarit\Surveyor\Types\IntType;

uses()->group('integration');

beforeEach(function () {
    AnalyzedCache::clear();
    Debug::$throw = true;
});

afterEach(function () {
    AnalyzedCache::clear();
    Debug::$throw = false;
});

it('resolves a global statement without erroring', function () {
    $fixture = createPhpFixture('
namespace App;

class GlobalStatement
{
    public function test()
    {
        global $config;

        return $config;
    }
}
');

    $returnType = app(Analyzer::class)
        ->analyze($fixture)
        ->result()
        ->getMethod('test')
        ->returnType();

    expect($returnType)->not->toBeNull();
});

it('pulls a global variable type down from an enclosing scope', function () {
    $fixture = createPhpFixture('
namespace App;

$counter = 5;

class GlobalFromOuterScope
{
    public function test()
    {
        global $counter;

        return $counter;
    }
}
');

    $returnType = app(Analyzer::class)
        ->analyze($fixture)
        ->result()
        ->getMethod('test')
        ->returnType();

    expect($returnType)->toBeInstanceOf(IntType::class);
    expect($returnType->value)->toBe(5);
});
