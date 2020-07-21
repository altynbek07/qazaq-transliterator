# Qazaq Transliterator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/altynbek07/qazaq-transliterator.svg?style=flat-square)](https://packagist.org/packages/altynbek07/qazaq-transliterator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/altynbek07/qazaq-transliterator/run-tests?label=tests)](https://github.com/altynbek07/qazaq-transliterator/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/altynbek07/qazaq-transliterator.svg?style=flat-square)](https://packagist.org/packages/altynbek07/qazaq-transliterator)

![Qazaq Transliterator](https://tengrinews.kz/userdata/news/2017/news_315984/photo_212587.jpg)

Transliteration of the old Kazakh alphabet into a new one

## Installation

You can install the package via composer:

```bash
composer require altynbek07/qazaq-transliterator
```

## Usage

```php
<?php

use Altynbek07\QazaqTransliterator\QazaqTransliterator;

$oldText = 'Қазақстан Республикасы — Шығыс Еуропа мен Орталық Азияда орналасқан мемлекет.';
$newText = QazaqTransliterator::transliterate($oldText);

echo $newText; // Qazaqstan Respýblıkasy — Shyǵys Eýropa men Ortalyq Azııada ornalasqan memleket.
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email altynbek.kazezov.97@gmail.com instead of using the issue tracker.

## Credits

-   [Altynbek](https://github.com/altynbek07)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
