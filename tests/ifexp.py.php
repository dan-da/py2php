<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = true;
$b = $a ? 'Sally' : 'Mary';
$c = $a ? (1 + 2) : (3 + 4);
$d = $a ? 'Sally' : 'Mary' ? $a ? (1 + 2) : (3 + 4) : 'Other';
pyjslib_printnl([$b, $c, $d], true);

