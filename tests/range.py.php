<?php
require_once('py2phplib.php');
$my_list = array('one', 'two', 'three', 'four', 'five');
$my_list_len = count($my_list);
foreach( pyjslib_range(0, $my_list_len) as $i ) {
    pyjslib_printFunc($my_list[$i]);
}
