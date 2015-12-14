<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$foo = 'stuff';
unset($foo);
$bar = [1, 2, 3];
unset($bar[1]);
pyjslib_printnl($bar);

