<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = [[1, [2, 3]], [4, [5, 6]], [7, [8, 9]]];
foreach( $a as list($b, list($c, $d)) ) {
    pyjslib_printnl([$b, $c, $d], true);
}

