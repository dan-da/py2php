<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = (1 == 1);
$b = (1 < 2);
$c = (1 <= 3);
$d = (1 > 2);
$e = (1 >= 3);
$f = in_array(1, [1, 2]);
$g = (1 == 1);
$h = (1 != 2);
$i = !in_array(1, [1, 2, 3]);
$j = (1 != 2);
$k = (1 < 2) && (2 < 3) && (3 < 4);
$l = (1 <= 2) && (2 <= 3) && (3 <= 4);
$m = ($a == $b);
$n = ($a == $b) && ($b == $c);
$o = ($a == $b) && ($b == $c) && ($c > $h);
pyjslib_printnl([$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $o], true);

