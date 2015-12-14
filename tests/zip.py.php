<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$x = [1, 2, 3];
$y = [4, 5, 6];
$z = [7, 8, 9];
$z1 = pyjslib_zip($x, $y, $z);
$z2 = pyjslib_zip(['one', 'two', 'three'], [1, 2, 3]);
function print_zip($x) {
    foreach( $x as $y ) {
        foreach( $y as $z ) {
            pyjslib_print($z);
        }
    }
    pyjslib_printnl('');
}
print_zip($z1);
print_zip($z2);

