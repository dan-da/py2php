<?php
require_once('py2phplib.php');
$a = array();
list($a['fname'], $a['lname']) = ['John', 'Smith'];
pyjslib_printnl($a['fname']);
pyjslib_printnl($a['lname']);

