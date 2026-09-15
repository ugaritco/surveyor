<?php

use Ugarit\Surveyor\Analysis\Scope;
use Ugarit\Surveyor\Reflector\Reflector;
use Ugarit\Surveyor\Types\BoolType;
use Ugarit\Surveyor\Types\IntType;

beforeEach(function () {
    $this->reflector = app(Reflector::class);
    $this->reflector->setScope(new Scope);
});

it('resolves known DatePeriod properties', function () {
    expect($this->reflector->propertyType('recurrences', DatePeriod::class))->toBeInstanceOf(IntType::class);
    expect($this->reflector->propertyType('include_start_date', DatePeriod::class))->toBeInstanceOf(BoolType::class);
    expect($this->reflector->propertyType('include_end_date', DatePeriod::class))->toBeInstanceOf(BoolType::class);
});

it('resolves known DateInterval properties', function () {
    expect($this->reflector->propertyType('days', DateInterval::class))->toBeInstanceOf(IntType::class);
});

it('returns null for unknown date properties instead of throwing', function (string $class, string $property) {
    expect($this->reflector->propertyType($property, $class))->toBeNull();
})->with([
    [DatePeriod::class, 'timezone'],
    [DatePeriod::class, 'nope'],
    [DateInterval::class, 'from_string'],
    [DateInterval::class, 'nope'],
]);
