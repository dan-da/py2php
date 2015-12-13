<?php
require_once('py2phplib.php');
function sum($a,$b) {
    return ($a + $b);
}
$values = [1, 2];
pyjslib_printnl(sum(...$values));
$values = ['a' => 1, 'b' => 2];
pyjslib_printnl(py2php_kwargs_function_call('sum', [], $values));
function sum2($a,$b,$c,$d) {
    return ((($a + $b) + $c) + $d);
}
$values1 = [1, 2];
$values2 = ['c' => 10, 'd' => 15];
$s = py2php_kwargs_function_call('sum2', $values1, $values2);
function sum3(...$values) {
    $s = 0;
    foreach( $values as $v ) {
        $s = ($s + $v);
    }
    return $s;
}
pyjslib_printnl(sum3(1, 2, 3, 4, 5));

