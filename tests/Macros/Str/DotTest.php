<?php

namespace Vespera\LaravelMacros\Tests\Macros\Str;

use Illuminate\Support\Str;
use Vespera\LaravelMacros\Tests\TestCase;

class DotTest extends TestCase
{
    /** @test */
    public function it_provides_dot_macro()
    {
        $this->assertTrue(Str::hasMacro('dot'));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * */
    public function it_returns_string_in_dot_notation(string $value, string $expected)
    {
        $this->assertEquals($expected, Str::dot($value));
    }

    public function valuesProvider(): array
    {
        return [
            ['users[name]', 'users.name'],
            ['users[admin][name]', 'users.admin.name'],
            ['users[]', 'users'],
        ];
    }
}
