<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
function firstn($n) {
    $num = 0;
    while (($num < $n)) {
        yield($num);
        $num += 1;
    }
}
foreach( firstn(100) as $n ) {
    pyjslib_printnl($n);
}

