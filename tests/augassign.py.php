<?php
require_once('py2phplib.php');
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$idx = 0;
$idx += 3;
$idx -= 1;
$idx *= 4;
$idx /= 3;
$arr[$idx] += 1;
pyjslib_printnl(array($idx, $arr[$idx]), true);

