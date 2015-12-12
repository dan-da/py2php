<?php
require_once('py2phplib.php');
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

