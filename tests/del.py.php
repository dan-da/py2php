<?php
require_once('py2phplib.php');
$foo = 'stuff';
unset($foo);
$bar = [1, 2, 3];
unset($bar[1]);
pyjslib_printnl($bar);

