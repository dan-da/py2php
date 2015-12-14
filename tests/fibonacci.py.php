<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
function gen_fib($count) {
    $i = 1;
    if (($count == 0)) {
        $fib = [];
    }
    else if (($count == 1)) {
        $fib = [1];
    }
    else if (($count == 2)) {
        $fib = [1, 1];
    }
    else if (($count > 2)) {
        $fib = [1, 1];
        while (($i < ($count - 1))) {
            $fib[] = ($fib[$i] + $fib[($i - 1)]);
            $i += 1;
        }
    }
    return $fib;
}
pyjslib_printnl(gen_fib(10));

