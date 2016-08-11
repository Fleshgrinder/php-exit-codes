# PHP Exit Codes
Commonly used exit codes for usage in console applications and commands.

Using appropriate exit codes greatly helps users of your project or library to
 include them in their own scripting and take appropriate decisions based on
 the returned code. Simply always using the catch-all exit code _1_, as is most
 common, does not help the user in any way unless there is only a single source
 of error in the complete script; which is very unlikely.

## Installation
Open a terminal, enter your project directory and execute the following command
 to add this package to your dependencies:

```
$ composer require fleshgrinder/exit-codes
```

This command requires you to have Composer installed globally, as explained in
 the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
 Composer documentation.

## Usage
The constants are automatically loaded if you include the Composer provided
 auto-loader in your script.

```php
<?php

include __DIR__ . '/vendor/autoload.php';

exit(EXIT_SUCCESS);
```

## Weblinks
- Advanced Bash-Scripting Guide: [Appendix E. Exit Codes With Special Meanings](http://tldp.org/LDP/abs/html/exitcodes.html)
- FreeBSD Man Pages: [`man sysexits(3)`](https://www.freebsd.org/cgi/man.cgi?query=sysexits)

## License
This is free and unencumbered software released into the public domain.

[![Unlicense](https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Public_domain_shiny.svg/48px-Public_domain_shiny.svg.png)](http://unlicense.org/)
