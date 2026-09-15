<?php

use Ugarit\Surveyor\Analyzer\AnalyzedCache;
use Ugarit\Surveyor\Analyzer\Analyzer;
use Ugarit\Surveyor\Types\StringType;
use Ugarit\Surveyor\Types\Type;
use Ugarit\Surveyor\Types\UnionType;

uses()->group('integration');

beforeEach(function () {
    AnalyzedCache::clear();
});

afterEach(function () {
    AnalyzedCache::clear();
});

function findStringType(Ugarit\Surveyor\Types\Contracts\Type $type): ?StringType
{
    if ($type instanceof StringType) {
        return $type;
    }

    if ($type instanceof UnionType) {
        foreach ($type->types as $inner) {
            if ($inner instanceof StringType) {
                return $inner;
            }
        }
    }

    return null;
}

describe('Facade method resolution', function () {
    it('resolves Config::string() to a string return type via the underlying Repository', function () {
        $fixture = createPhpFixture('
namespace App\\Test;

use Heritage\\Support\\Facades\\Config;

class ConfigController
{
    public function appName(): string
    {
        return Config::string(\'app.name\');
    }
}');

        $analyzer = app(Analyzer::class);
        $result = $analyzer->analyze($fixture)->result();

        $returnType = $result->getMethod('appName')->returnType();

        expect(Type::is($returnType, StringType::class) || $returnType instanceof UnionType)->toBeTrue();
        expect(findStringType($returnType))->not->toBeNull();

        unlink($fixture);
    });
});
