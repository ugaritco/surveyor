<?php

use App\Macros\SurveyorMacros;
use Ugarit\Surveyor\Analyzer\AnalyzedCache;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Types\StringType;

uses()->group('integration');

beforeEach(function () {
    AnalyzedCache::clear();
});

afterEach(function () {
    AnalyzedCache::clear();
});

it('resolves the return type of a registered macro', function () {
    SurveyorMacros::register();

    $fixture = createPhpFixture('
namespace App;

use Heritage\Support\Str;

class MacroSubject
{
    public function test()
    {
        return Str::surveyorShout("hi");
    }
}
');

    $returnType = app(Analyzer::class)
        ->analyze($fixture)
        ->result()
        ->getMethod('test')
        ->returnType();

    expect($returnType)->toBeInstanceOf(StringType::class);
});
