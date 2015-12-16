<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = pyjslib_dict();
list($a['fname'], $a['lname']) = ['John', 'Smith'];
pyjslib_printnl($a['fname']);
pyjslib_printnl($a['lname']);
$a[/* py2php : PHP does not support non-scalar array keys */] = ['Jim', 'Jones'];

