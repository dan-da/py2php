<?php
require_once('py2phplib.php');
list($a, $b, $c) = array('python', 'to', 'php');
pyjslib_printFunc(array( $a, $b, $c ), true);
