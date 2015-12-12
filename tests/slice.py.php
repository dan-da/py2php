<?php
require_once('py2phplib.php');
$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
pyjslib_printnl(array_slice($a, null, 2));
pyjslib_printnl(array_slice($a, 2, null));
pyjslib_printnl(array_slice($a, 3, 5 - 3));

