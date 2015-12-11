<?php
require_once('py2phplib.php');
$a = true;
$b = $a ? 'Sally' : 'Mary';
$c = $a ? (1 + 2) : (3 + 4);
$d = $a ? 'Sally' : 'Mary' ? $a ? (1 + 2) : (3 + 4) : 'Other';
pyjslib_printnl(array($b, $c, $d), true);

