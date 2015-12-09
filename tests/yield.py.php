<?php
require_once('py2phplib.php');
function firstn($n) {
    $num = 0;
    while (($num < $n)) {
        yield($num);
        $num += 1;
    }
}
foreach( firstn(100) as $n ) {
    pyjslib_printFunc($n);
}

