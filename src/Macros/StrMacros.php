<?php

namespace Vespera\LaravelMacros\Macros;

use Closure;
use Illuminate\Support\Str;

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

    /**
     * Return the first letter of each word
     */
    public function initials(): Closure
    {
        return function (string $value, int $limit = 2) {
            $value = Str::slug($value);
            $value = strtoupper($value);
            $words = explode('-', $value);

            if (count($words) === 1) {
                return substr($value, 0, $limit);
            }

            $initials = '';
            for ($i = 0; $i < $limit; $i++) {
                if (!isset($words[$i])) {
                    break;
                }

                $initials .= $words[$i][0];
            }

            return $initials;
        };
    }
}
