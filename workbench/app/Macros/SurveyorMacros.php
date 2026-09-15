<?php

namespace App\Macros;

use Heritage\Support\Str;

class SurveyorMacros
{
    public static function register(): void
    {
        Str::macro('surveyorShout', fn (string $value): string => strtoupper($value));
    }
}
