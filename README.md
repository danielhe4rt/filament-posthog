# Implement any type of PostHog Widget

[![Latest Version on Packagist](https://img.shields.io/packagist/v/danielhe4rt/filament-posthog.svg?style=flat-square)](https://packagist.org/packages/danielhe4rt/filament-posthog)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/danielhe4rt/filament-posthog/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/danielhe4rt/filament-posthog/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/danielhe4rt/filament-posthog/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/danielhe4rt/filament-posthog/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/danielhe4rt/filament-posthog.svg?style=flat-square)](https://packagist.org/packages/danielhe4rt/filament-posthog)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require danielhe4rt/filament-posthog
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-posthog-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-posthog-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-posthog-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentPosthog = new DanielHe4rt\FilamentPosthog();
echo $filamentPosthog->echoPhrase('Hello, DanielHe4rt!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [danielhe4rt](https://github.com/danielhe4rt)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
