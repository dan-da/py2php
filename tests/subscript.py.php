<?php
require_once('py2phplib.php');
$a = array();
list($a['fname'], $a['lname']) = array('John', 'Smith');
pyjslib_printFunc($a['fname']);
pyjslib_printFunc($a['lname']);

