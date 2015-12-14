<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
class gabby {
    static function talk($arg) {
        pyjslib_printnl($arg);
    }
}
function talk($arg) {
    pyjslib_printnl($arg);
}
function talk2($arg1,$arg2) {
    pyjslib_printnl([$arg1, $arg2], true);
}
$l = [1, 2, 3, 4, 5, 6];
$l2 = ['a', 'b', 'c'];
pyjslib_map('talk', $l);
pyjslib_map('talk2', $l, $l2);
pyjslib_map(['gabby', 'talk'], $l2);
$g = new gabby();
pyjslib_map([$g, 'talk'], $l2);
function add($arg1,$arg2) {
    if (($arg1 == null) || ($arg2 == null)) {
        return;
    }
    return ($arg1 + $arg2);
}
pyjslib_printnl(pyjslib_map('add', [1, 2, 3, 4, 5], [1, 2, 3, 4, 5, 6, 7, 8]));

