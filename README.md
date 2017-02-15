# Find and Replace with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/15/2017

#### By Sarah Leahy , Maggie Harrington

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Maggie Harrington

## License
* MIT

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - FindAndReplace class: exceptions property and empty constructor, getter, setter and checkArray() methods.
* Phase 3 - Build Test cases and implement FindAndReplace methods

| Behavior - What does checkArray() return?                      | Input                       | Output                     |
|----------------------------------------------------------------|-----------------------------|----------------------------|
|  User enters phrase                                            |  I have a cat               |                            |
|  User enters search word                                       |  cat                        |                            |
|  User enters word to replace                                   |  "dog"                      |                            |
|  String is split into array                                    |  I have a cat               | ["I", "have", "a", "cat"]  |
|  Find search word in phrase                                    |  ["I", "have", "a", "cat"]  |  cat                       |
|  Replace search word in phrase                                 |  cat                        |  dog                       |
|  Push replaced word into phrase array                          |  dog                        |  ["I", "have", "a", "dog"] |
|  Convert array back to string and return phrase with new word  |  ["I", "have", "a", "dog"]  |  I have a dog              |

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter phrase, search word, and word to replace.

* End specifications
