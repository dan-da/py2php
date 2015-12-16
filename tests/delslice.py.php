<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$l = [1, 2, 3, 4, 5, 6];
pyjslib_del_slice($l, 2, 5);
pyjslib_printnl($l);
$l = [1, 2, 3, 4, 5, 6];
pyjslib_del_slice($l, null, 5);
pyjslib_printnl($l);
$l = [1, 2, 3, 4, 5, 6];
pyjslib_del_slice($l, 2, null);
pyjslib_printnl($l);
$l = [1, 2, 3, 4, 5, 6];
pyjslib_del_slice($l, null, null);
pyjslib_printnl($l);

