<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
array_splice($a, 2, 5-2, ['a', 'b', 'c']);
pyjslib_printnl($a);
array_splice($a, 3, count($a)-3, ['red', 'green', 'blue']);
pyjslib_printnl($a);
array_splice($a, 0, count($a), [10, 9, 8, 7, 6, 5, 4]);
pyjslib_printnl($a);
array_splice($a, 0, 2, [20, 30, 40]);
pyjslib_printnl($a);

