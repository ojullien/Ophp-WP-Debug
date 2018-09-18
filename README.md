# WordPress theme debugger

WordPress theme debugger I use while developping wordpress theme.

*Note: I use this package for my own projects, it contains only the features I need.*

## Table of Contents

- [Requirements](#requirements)
- [Installation and Autoloading](#installation)
- [Documentation](#documentation)
- [Tests](#tests)
- [Contributing](#contributing)
- [License](#license)

## Requirements

- PHP: ^7.2

## Installation and Autoloading

This package requires PHP 7.2. For specifics, please examine the package [composer.json](https://github.com/ojullien/Ophp-WP-Debug/blob/master/composer.json) file.

You may check if your PHP and extension versions match the platform requirements using `composer diagnose` and `composer check-platform-reqs`. (This requires [Composer](https://getcomposer.org/) to be available as composer.)

This package is installable and PSR-4 autoloadable via [Composer](https://getcomposer.org/) as ophp/wp/debug. For no dev, use `composer install --no-dev` and for dev, use `composer install`.

Alternatively, [download a release](https://github.com/ojullien/Ophp-WP-Debug/releases), or clone this repository, then map the Ophp\WP\Debug namespace to the package src/ directory.

## Documentation

I wrote and I use this package for my own projects. And, unfortunately, I do not provide exhaustive documentation. Please read the code and the comments ;)

## Tests

To run the unit tests at the command line, issue `composer install` and then `./vendor/bin/phpunit` at the package root. (This requires [Composer](https://getcomposer.org/) to be available as composer.)

## Contributing

Thanks you for taking the time to contribute. Please fork the repository and make changes as you'd like.

As I use this package for my own projects, it contains only the features I need. But If you have any ideas, just open an [issue](https://github.com/ojullien/Ophp-WP-Debug/issues) and tell me what you think. Pull requests are also warmly welcome.

If you encounter any **bugs** in the code, please open an [issue](https://github.com/ojullien/Ophp-WP-Debug/issues).

Be sure to include a title and clear description,as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

## License

**WordPress theme debugger** is open-source and is licensed under the [MIT License](https://github.com/ojullien/Ophp-WP-Debug/blob/master/LICENSE).
