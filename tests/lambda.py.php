<?php
require_once('py2phplib.php');
$result = function ($x) {return ($x * 2);};
pyjslib_printnl($result(2));
pyjslib_printnl(call_user_func(function ($x) {return ($x * 2);}, 3));

