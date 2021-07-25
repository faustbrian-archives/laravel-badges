# Laravel Badges

[![Latest Version](https://badgen.net/packagist/v/konceiver/laravel-badges)](https://packagist.org/packages/konceiver/laravel-badges)
[![Software License](https://badgen.net/packagist/license/konceiver/laravel-badges)](https://packagist.org/packages/konceiver/laravel-badges)
[![Build Status](https://img.shields.io/github/workflow/status/konceiver/laravel-badges/run-tests?label=tests)](https://github.com/konceiver/laravel-badges/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/konceiver/laravel-badges)](https://codeclimate.com/github/konceiver/laravel-badges)
[![Quality Score](https://badgen.net/codeclimate/maintainability/konceiver/laravel-badges)](https://codeclimate.com/github/konceiver/laravel-badges)
[![Total Downloads](https://badgen.net/packagist/dt/konceiver/laravel-badges)](https://packagist.org/packages/konceiver/laravel-badges)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides associations for badges and Laravel Eloquent Models.

## Installation

```bash
composer require konceiver/laravel-badges
```

## Usage

``` php
namespace App;

use Konceiver\Badges\Concerns\HasBadges;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasBadges;
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@konceiver.dev. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

laravelBadges is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
