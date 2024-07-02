# Pac PHP
A Test package for PHP code 

## Demo code
```php
use Govind\Message;
use Govind\NewsLetter;
use Govind\Reader;

echo Message::say("Hello Govind").PHP_EOL;

$timesOfIndia = new NewsLetter('Times Of India');

$govind = new Reader('Govind');
$arvind = new Reader('Arvind');
$karishma = new Reader('Karishma');

$timesOfIndia->attach($govind);
$timesOfIndia->attach($arvind);
$timesOfIndia->attach($karishma);

$timesOfIndia->breakOutNews("Today is holiday");
```