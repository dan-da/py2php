<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$result = function ($x) {return ($x * 2);};
pyjslib_printnl($result(2));
pyjslib_printnl(call_user_func(function ($x) {return ($x * 2);}, 3));

