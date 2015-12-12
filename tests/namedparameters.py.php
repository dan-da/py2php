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
py2php_kwargs_function_call('info', [["collapse" => true], 'hey']);
py2php_kwargs_function_call('info', [["spacing" => 15, "text1" => 'hello']]);
class foo {
    function info($text1,$text2='World',$spacing=10,$collapse=false) {
        pyjslib_print($text1);
        if (!($collapse)) {
            foreach( pyjslib_range(1, $spacing) as $i ) {
                pyjslib_print(' ');
            }
        }
        pyjslib_printnl($text2);
    }
    function staticinfo($text1,$text2='World',$spacing=10,$collapse=false) {
        pyjslib_print($text1);
        if (!($collapse)) {
            foreach( pyjslib_range(1, $spacing) as $i ) {
                pyjslib_print(' ');
            }
        }
        pyjslib_printnl($text2);
    }
}
$f = new foo();
$f->info('foo.hello');
$f->info('foo.hullo', 'Mars', 12);
py2php_kwargs_method_call($f, 'info', [["collapse" => true], 'foo.hey']);
py2php_kwargs_method_call($f, 'info', [["spacing" => 15, "text1" => 'foo.hello']]);
py2php_kwargs_method_call('foo', 'staticinfo', [["collapse" => true], 'foo.static.hey']);

