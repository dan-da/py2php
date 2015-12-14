<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
require_once( 'os_path.php');
$dir = os_path::realpath('.');
pyjslib_printnl(os_path::isdir($dir));
pyjslib_printnl(os_path::isfile($dir));
pyjslib_printnl(os_path::islink($dir));
pyjslib_printnl([os_path::split($dir)[0], os_path::split($dir)[1]], true);
pyjslib_printnl(os_path::join('/' . os_path::split($dir)[0] . '/', os_path::split($dir)[1]));

