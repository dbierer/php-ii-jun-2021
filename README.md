# Class Repo: PHP II - Jun - 2021

## TODO
* Q: Example of using `__call()` to implement a "plugin" architecture?
* A: See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/PluginManager.php
  A: See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/AbstractController.php
    * Look at line 277 (the `__call()` magic method)
## Homework
* For Fri 18 Jun 2021
  * Lab: Validate an Email Address
* For Thu 17 Jun 2021
  * Lab: SQL Statements
  * Lab: Prepared Statements
  * Lab: Stored Procedure
  * Lab: Transaction
* For Wed 16 Jun 2021
  * Lab: Type Hinting
  * Lab: Build Custom Exception Class
  * Lab: Traits
* For Fri 11 Jun 2021
  * Lab: Magic Methods
    * See: https://www.php.net/manual/en/language.oop5.magic.php
  * Lab: Abstract Classes
  * Lab: Interfaces
* For Wed 9 Jun 2021
  * Lab: Namespace
  * Lab: Create a Class
  * Lab: Create an Extensible Super Class  
## OOP
### Autoloading
See `autoload_example.php`
Notes:
* `__autoload()` is deprecated in PHP 7 and removed in PHP 8
* Good source of test data: https://download.geonames.org/export/dump/countryInfo.txt
* Example of a class that uses `static` return data type
  * https://github.com/dbierer/PHP-8-Programming-Tips-Tricks-and-Best-Practices/blob/main/ch09/php8_static_return_type.php
  * https://github.com/dbierer/PHP-8-Programming-Tips-Tricks-and-Best-Practices/blob/main/src/Php8/Sql/Select.php
## PHP Async
* For starters, see: https://www.zend.com/blog/swoole
## Composer
Example of alternative repository other than `packagist.org`
* wpackagist.org
  * Add this to the composer.json file:
```
    "repositories":[
        {
            "type":"composer",
            "url":"https://wpackagist.org",
            "only": [
                "wpackagist-plugin/*",
                "wpackagist-theme/*"
            ]
        }
    ],
    "require": {
        "aws/aws-sdk-php":"*",
        "wpackagist-plugin/akismet":"dev-trunk",
        "wpackagist-plugin/wordpress-seo":">=7.0.2",
        "wpackagist-theme/hueman":"*"
    },
```
If you run into problems regarding unmatched requirements, add this flag: `--ignore-platform-reqs`
* Example: you're running PHP 8, and the Composer package requires PHP 7, but *not* 8
* Composer will install with this flag ... *but* there's still guarantee that the package runs in PHP 8

## Web Services
SOAP vs. REST:
* https://www.ateam-oracle.com/performance-study-rest-vs-soap-for-mobile-applications
* Example of SOAP client: 
  * https://github.com/dbierer/classic_php_examples/blob/master/web/soap_client.php

## Final Bindings
* Alternate form of documentation: Swagger
* https://swagger.io/
* Mainly oriented towards API development
* Also uses docblocks
* JIT
  * https://github.com/dbierer/PHP-8-Programming-Tips-Tricks-and-Best-Practices/blob/main/ch10/php8_jit_mandelbrot.php
  * https://github.com/dbierer/PHP-8-Programming-Tips-Tricks-and-Best-Practices/blob/main/ch10/php8_jit_reset.php
  
