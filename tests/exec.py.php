<?php
require_once('py2phplib.php');
eval( <<< 'PY2PHP_EVAL_END'
$a = '5';
$b = '6';
$c = 7;
PY2PHP_EVAL_END
);
pyjslib_printFunc($a);
eval('$d = 8;');
eval('pyjslib_printFunc(($c + $d));');

