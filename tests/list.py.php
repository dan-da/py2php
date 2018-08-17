<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
pyjslib_printnl(pyjslib_list('abc'));
pyjslib_printnl(pyjslib_list([1, 2, 3]));
pyjslib_printnl(pyjslib_list(['x', 'y', 'z']));
pyjslib_printnl(pyjslib_list());

