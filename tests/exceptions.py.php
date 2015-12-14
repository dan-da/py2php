<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
class ZeroDivisionException extends Exception {
}
class ValidationException extends Exception {
}
try {
    pyjslib_printnl('hi');
}
catch(ZeroDivisionError $e) {
    }
function div($x,$y) {
    try {
        if (($x < 0) || ($y < 0)) {
            throw new ValidationException;
        }
        if (($y == 0)) {
            throw new ZeroDivisionException;
        }
        $result = ($x / $y);
    }
    catch(ZeroDivisionException $e) {
                pyjslib_printnl('division by zero!');
    }
    catch(ValidationException $e) {
                pyjslib_printnl('Values must be greater than 0!');
    }
    finally {
        pyjslib_printnl('executing finally clause');
    }
}
div(-1, 3);
div(4, 0);
div(0, 4);

