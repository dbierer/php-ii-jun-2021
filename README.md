# Class Repo: PHP II - Jun - 2021

## TODO
* Q: Example of using `__call()` to implement a "plugin" architecture?
* A: See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/PluginManager.php
  A: See: https://github.com/laminas/laminas-mvc/blob/master/src/Controller/AbstractController.php
    * Look at line 277 (the `__call()` magic method)

## Homework
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
