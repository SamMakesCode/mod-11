mod-11
-
mod-11 is a PSR-2-compliant library for calculating Mod11 checksums as used by the Royal Mail, USPS and others.

# Installing

You can easily install this library by running the following command if you're using composer.

    composer require samlittler/mod-11
    
Alternatively, you can download it and manually include it.
    
# Usage

Usage is really simple too.

    <?php
    
    use \Mod11\Mod11;
    
    $checksum = Mod11::calculate($test_value, $weights);
    
# Tests

Testing on 4 working strings from different sources. It works :)

# Changelist

1.1.1
- Dependency on PHP 7.1 specified. This always existed, but now it's explicit.

1.1.0
- Removed dependency on phpunit. Now only a dev dependency
- Added a .gitignore
- Made PSR-2 compliant

1.0.0
- Initial commit with working tests
