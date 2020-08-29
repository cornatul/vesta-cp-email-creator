# Vesta Mail Creator

This is a simple script to use for creating an email address in VestaCP Panel.
For details please have a look to the php script.
This is quite easy to use.

## How to use Vesta CP Email Creator
```
git clone https://github.com/lzomedia/vesta-cp-email-creator.git .
```

or 

```
composer require lzomedia/vestacp-email
```

after 

```
$vst_hostname = 'server.vestacp.com';
$vst_username = 'vestaUsername';
$vst_password = 'vestaPassword';
$domainToUse = 'domainToUseWhenCreatingTheDomain.com';

$vestaCreator = new LzoMedia\VEstaCPEmail\VestaEmailCreator();
$vestaCreator->createAccount($vst_hostname, $vst_username,$vst_password,$domainToUse);

```

## Issues
If you find issues please contact me via Github or Email

## Owner
This script was created by [@Lzo Media](https://lzomedia.com)

## DON'T BE A DICK PUBLIC LICENSE

> Copyright (C) [2020] [Lzo Media]

Everyone is permitted to copy and distribute verbatim or modified
copies of this license document.

> DON'T BE A DICK PUBLIC LICENSE
> TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

1. Do whatever you like with the original work, just don't be a dick.

   Being a dick includes - but is not limited to - the following instances:

 1a. Outright copyright infringement - Don't just copy this and change the name.
 1b. Selling the unmodified original with no work done what-so-ever, that's REALLY being a dick.
 1c. Modifying the original work to contain hidden harmful content. That would make you a PROPER dick.

2. If you become rich through modifications, related works/services, or supporting the original work,
share the love. Only a dick would make loads off this work and not buy the original work's
creator(s) a pint.

3. Code is provided with no warranty. Using somebody else's code and bitching when it goes wrong makes
you a DONKEY dick. Fix the problem yourself. A non-dick would submit the fix back.
        
