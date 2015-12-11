<?php
require_once('py2phplib.php');
function info($text1,$text2='World',$spacing=10,$collapse=false) {
    pyjslib_print($text1);
    if (!($collapse)) {
        foreach( pyjslib_range(1, $spacing) as $i ) {
            pyjslib_print(' ');
        }
    }
    pyjslib_printnl($text2);
}
info('hello');
info('hullo', 'Mars', 12);
py2php_kwargs_function_call('info', array(array("collapse" => true), 'hey'));
py2php_kwargs_function_call('info', array(array("spacing" => 15, "text1" => 'hello')));

