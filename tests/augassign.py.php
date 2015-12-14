<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$idx = 0;
$idx += 3;
$idx -= 1;
$idx *= 4;
$idx /= 3;
$arr[$idx] += 1;
pyjslib_printnl([$idx, $arr[$idx]], true);

