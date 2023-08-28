# dockernator
PHP fork of the Docker Desktop name generator when provisioning containers.

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/srmklive/dockernator.svg?style=flat-square)](https://packagist.org/packages/srmklive/dockernator)
[![Total Downloads](https://img.shields.io/packagist/dt/srmklive/dockernator.svg?style=flat-square)](https://packagist.org/packages/srmklive/dockernator)
[![StyleCI](https://github.styleci.io/repos/683983439/shield)](https://github.styleci.io/repos/683983439)
![Tests](https://github.com/srmklive/laravel-dockernator/workflows/Dockernator/badge.svg)

- [Installation](#installation)
- [Usage](#usage)

    
<a name="installation"></a>
## Installation

The package can be installed through Composer:

```php
composer require srmklive/dockernator

<a name="usage"></a>
## Usage

```php
// Import the class namespaces first, before using it directly
use Srmklive\Dockernator\Generator as NameGenerator;

$provider = new NameGenerator;

// Generate a random beautiful name
$name = $generator->generate();