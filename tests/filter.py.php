<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
function is_even($val) {
    return (($val % 2) == 0) ? true : false;
}
pyjslib_printnl(pyjslib_filter('is_even', pyjslib_range(1, 20)));

