<?php

namespace Vespera\LaravelMacros\Macros;

use Closure;

class StrMacros
{
    /**
     * Return the given string in dot notation.
     */
    public function dot(): Closure
    {
        return function (string $value) {
            return trim(
                str_replace(['[', ']'], ['.', ''], $value),
                '.'
            );
        };
    }
}
