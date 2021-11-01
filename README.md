# A set of useful Laravel macros

The `vesperabr/laravel-macros` package add a set of useful macros to your Laravel app.

## Installation

You can install the package via composer:

```bash
$ composer require vesperabr/laravel-macros
```

The package will automatically register itself.

## Str macros

### `Str::dot()`

The `Str::dot()` method converts the given string to dot notation. This is especially useful when you need to handle form input names.

```php
use Illuminate\Support\Str;

Str::dot('users[email]'); // users.email
```

### `Str::initials()`

The `Str::initials()` method return the initials from a given string. The first parameter is the string and the second is the character limit.

```php
use Illuminate\Support\Str;

Str::initials('Brenda Astin Zaion', 3); // BAZ
```

## Testing
```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ricardo Monteiro](https://github.com/ricazao)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
