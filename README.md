# N6l Phone Number Data PHP (n6l-phone-number-data-php)
Implementation of n6l-phone-number-data to retrieve national phone number formatting data from PHP storage.

n6l-phone-number-data implementations are used by:
* [phone-number-validator](https://github.com/beastbytes/phone-number-validator) to validate national phone numbers
* [phone-number-helper](https://github.com/beastbytes/phone-number-helper) to convert national phone numbers to
  [Extensible Provisioning Protocol (EPP) format](https://www.rfc-editor.org/rfc/rfc4933.html#section-2.5)

For license information see the [LICENSE](LICENSE.md) file.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist beastbytes/n6l-phone-number-data-php
```

or add

```json
"beastbytes/n6l-phone-number-data-php": "^2.0"
```

to the 'require' section of your composer.json.


## Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

## Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework with
[Infection Static Analysis Plugin](https://github.com/Roave/infection-static-analysis-plugin). To run it:

```shell
./vendor/bin/roave-infection-static-analysis-plugin
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```
