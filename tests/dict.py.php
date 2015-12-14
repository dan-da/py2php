<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = py2php_kwargs_function_call('pyjslib_dict', [], ["one" => 1,"two" => 2,"three" => 3]);
$b = ['one' => 1, 'two' => 2, 'three' => 3];
$c = pyjslib_dict(pyjslib_zip(['one', 'two', 'three'], [1, 2, 3]));
$d = pyjslib_dict([['two', 2], ['one', 1], ['three', 3]]);
$e = pyjslib_dict(['three' => 3, 'one' => 1, 'two' => 2]);
$f = pyjslib_dict();
function print_dict($d) {
    pyjslib_printnl([$d['one'], $d['two'], $d['three']], true);
}
print_dict($a);
print_dict($b);
print_dict($c);
print_dict($d);
print_dict($e);
pyjslib_printnl(($a == $b) && ($b == $c) && ($c == $d) && ($d == $e));

