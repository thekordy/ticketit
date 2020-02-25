# Contributing to Ticketit

Ticketit is an open source project.

It is the work of many contributors. We appreciate your help!


## Before filing an issue

If you are unsure whether you have found a bug, please consider searching the [the issues list](
https://github.com/thekordy/ticketit/issues) for similar situations first.


## Filing issues

Sensitive security-related issues should be reported to [security-ticketit@kordy.info](
mailto:security-ticketit@kordy.info).

Otherwise, when filing an issue, make sure to answer these five questions:

1. What version of Ticketit are you using?
2. What operating system are you using?
3. What Laravel version are you using?
4. What did you do?
5. What did you expect to see?
6. What did you see instead?


## Contributing code

### Coding standards

Please respect all of [PHP Standards Recommendations (PSR)](https://www.php-fig.org/psr/) 


### Tests coverage

Provide a "good" tests coverage of your code contribution. Follow [Laravel convention](
https://laravel.com/docs/master/testing) for building tests. 
If contributing UI features, please add [browser tests](https://laravel.com/docs/master/dusk) as well.

### Dev environment setup

Using docker

````bash
# Set the dev container and install dependencies
make install

# Run application tests
make test
````