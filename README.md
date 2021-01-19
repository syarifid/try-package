# First Laravel Package Demo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/syarifid/try-package.svg?style=flat-square)](https://packagist.org/packages/syarifid/try-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/syarifid/try-package/run-tests?label=tests)](https://github.com/syarifid/try-package/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/syarifid/try-package.svg?style=flat-square)](https://packagist.org/packages/syarifid/try-package)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require syarifid/try-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Syarifid\TryPackage\TryPackageServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Syarifid\TryPackage\TryPackageServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$try-package = new Syarifid\TryPackage();
echo $try-package->echoPhrase('Hello, Syarifid!');
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

- [Muhammad Syarifudin](https://github.com/syarifid)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
