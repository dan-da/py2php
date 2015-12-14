<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$g1 = 'hello';
$g2 = 'world';
function hello() {
    global $g1, $g2;
    pyjslib_printnl(['hello()', $g1, $g2], true);
}
class foo {
    function hello() {
        global $g1, $g2;
        pyjslib_printnl(['foo::hello()', $g1, $g2], true);
    }
}
hello();
$f = new foo();
$f->hello();

