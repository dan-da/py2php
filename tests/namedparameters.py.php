<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
function info($text1,$text2='World',$spacing=10,$collapse=false) {
    pyjslib_print($text1);
    if (!($collapse)) {
        foreach( pyjslib_list(pyjslib_range(1, $spacing)) as $i ) {
            pyjslib_print(' ');
        }
    }
    pyjslib_printnl($text2);
}
info('hello');
info('hullo', 'Mars', 12);
py2php_kwargs_function_call('info', ['hey'], ["collapse" => true]);
py2php_kwargs_function_call('info', [], ["spacing" => 15,"text1" => 'hello']);
$kwargs = ['text1' => 'silly', 'text2' => 'goose'];
py2php_kwargs_function_call('info', [], $kwargs);
class foo extends stdClass {
    function __construct($text1=null,$text2=null,$spacing=6,$collapse=true) {
        if (($text1 != null)) {
            $this->info($text1, $text2, $spacing, $collapse);
        }
    }
    function info($text1,$text2='World',$spacing=10,$collapse=false) {
        pyjslib_print($text1);
        if (!($collapse)) {
            foreach( pyjslib_list(pyjslib_range(1, $spacing)) as $i ) {
                pyjslib_print(' ');
            }
        }
        pyjslib_printnl($text2);
    }
    static function staticinfo($text1,$text2='World',$spacing=10,$collapse=false) {
        pyjslib_print($text1);
        if (!($collapse)) {
            foreach( pyjslib_list(pyjslib_range(1, $spacing)) as $i ) {
                pyjslib_print(' ');
            }
        }
        pyjslib_printnl($text2);
    }
}
$f = new foo();
$f->info('foo.hello');
$f->info('foo.hullo', 'Mars', 12);
py2php_kwargs_method_call($f, null, 'info', ['foo.hey'], ["collapse" => true]);
py2php_kwargs_method_call($f, null, 'info', [], ["spacing" => 15,"text1" => 'foo.hello']);
py2php_kwargs_method_call($f, null, 'info', [], $kwargs);
$fg = py2php_kwargs_function_call('new foo', [], ["text1" => 'kwarg constructor',"collapse" => false]);
py2php_kwargs_method_call('foo', null, 'staticinfo', ['foo.static.hey'], ["collapse" => true]);
py2php_kwargs_method_call('foo', null, 'staticinfo', [], $kwargs);
class foosub extends foo {
    function __construct() {
        $kwargs = ['text1' => 'foosub', 'text2' => 'says hello'];
        py2php_kwargs_method_call($this, 'parent', '__construct', [], $kwargs);
    }
}
$fs = new foosub();

