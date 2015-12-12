<?php
require_once('py2phplib.php');
$a = 6 << 2;
$b = 6 >> 2;
$c = 1 | 2;
$d = 1 & 2;
$e = 2 ^ 5;
$f = (2 * 6);
$g = pow(2, 8);
pyjslib_printnl([$a, $b, $c, $d, $e, $f, $g], true);
$a |= 2;
$b &= 2;
pyjslib_printnl([$a, $b], true);

