# NumberSpeller ![alt text](https://img.shields.io/badge/licence-BSD--3--Clause-blue.svg "Licence") ![alt text](https://img.shields.io/badge/tests-3%20%2F%203-brightgreen.svg "Tests") ![alt text](https://img.shields.io/badge/coverage-100%25-green.svg "Coverage")

Something similar to NumberFormatter with NumberFormatter::SPELLOUT style. 
Class can spell numbers using custom locales. As additional feature, you are able to get correct word variant depends on number.

## Installation

Just clone that repository or use composer:

```bash
composer require plugowski/number_speller
```
 
## Usage
 
Basic usage looks like code below:
 
```php
<?php
require __DIR__ . '/vendor/autoload.php';

$speller = NumberSpeller\NumberSpellerFactory::create('pl_PL');
echo $speller->verbally(125000); // will return sto dwadzieścia pięć tysięcy
```

You can also use NumberSpeller::variety() method to get correct word form for current number (in Poland we got three different forms depend on number value).

```php
<?php
$speller = NumberSpeller\NumberSpellerFactory::create('pl_PL');
echo $speller->variety(2, ['jabłko', 'jabłka', 'jabłek']); // will return: jabłka
```

## Licence

New BSD Licence: https://opensource.org/licenses/BSD-3-Clause