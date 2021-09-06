<?php

namespace Vespera\LaravelMacros\Support;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Vespera\LaravelMacros\Macros\StrMacros;

class SeviceProvider extends ServiceProvider
{
    public function register()
    {
        Str::mixin(new StrMacros());
    }
}
