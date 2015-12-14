<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$my_list = ['one', 'two', 'three', 'four', 'five'];
$my_list_len = count($my_list);
foreach( pyjslib_range(0, $my_list_len) as $i ) {
    pyjslib_printnl($my_list[$i]);
}

