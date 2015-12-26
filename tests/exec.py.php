<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
eval( <<< 'PY2PHP_EVAL_END'
$a = '5';
$b = '6';
$c = 7;
PY2PHP_EVAL_END
);
pyjslib_printnl($a);
eval('$d = 8;');
eval('pyjslib_printnl(($c + $d));');
function myfunc($a,$b) {
    pyjslib_printnl(($a + $b));
}
$code = 'myfunc(1,6);';
eval($code);
$f = 'func';
eval('my' . $f . '(2,4);');

