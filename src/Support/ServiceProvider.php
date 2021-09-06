<?php

namespace Vespera\LaravelMacros\Support;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Str;
use Vespera\LaravelMacros\Macros\StrMacros;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        Str::mixin(new StrMacros());
    }
}
