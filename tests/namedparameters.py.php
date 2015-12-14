<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
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
py2php_kwargs_function_call('info', ['hey'], ["collapse" => true]);
py2php_kwargs_function_call('info', [], ["spacing" => 15,"text1" => 'hello']);
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
    static function staticinfo($text1,$text2='World',$spacing=10,$collapse=false) {
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
py2php_kwargs_method_call($f, 'info', ['foo.hey'], ["collapse" => true]);
py2php_kwargs_method_call($f, 'info', [], ["spacing" => 15,"text1" => 'foo.hello']);
py2php_kwargs_method_call('foo', 'staticinfo', ['foo.static.hey'], ["collapse" => true]);

