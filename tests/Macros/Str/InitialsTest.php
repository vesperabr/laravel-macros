<?php

namespace Vespera\LaravelMacros\Tests\Macros\Str;

use Illuminate\Support\Str;
use Vespera\LaravelMacros\Tests\TestCase;

class InitialsTest extends TestCase
{
    /** @test */
    public function it_provides_initials_macro()
    {
        $this->assertTrue(Str::hasMacro('initials'));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * */
    public function it_returns_the_first_letter_of_each_word(string $value, int $limit, string $expected)
    {
        $this->assertEquals($expected, Str::initials($value, $limit));
    }

    public function valuesProvider(): array
    {
        return [
            ['Érika', 1, 'E'],
            ['Fulano', 2, 'FU'],
            ['Flávio', 3, 'FLA'],
            ['Fulano Silva Costa', 1, 'F'],
            ['Fulano Silva Costa', 2, 'FS'],
            ['Fulano Silva Costa', 3, 'FSC'],
            ['Fulano Silva Costa', 4, 'FSC'],
            ['👋', 1, '']
        ];
    }
}
