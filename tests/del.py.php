<?php
require_once('py2phplib.php');
$foo = 'stuff';
unset($foo);
$bar = array(1, 2, 3);
unset($bar[1]);
pyjslib_printFunc($bar);

