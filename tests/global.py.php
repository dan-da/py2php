<?php
require_once('py2phplib.php');
$g1 = 'hello';
$g2 = 'world';
function hello() {
    global $g1, $g2;
    pyjslib_printFunc(array('hello()', $g1, $g2), true);
}
class foo {
    function hello() {
        global $g1, $g2;
        pyjslib_printFunc(array('foo::hello()', $g1, $g2), true);
    }
}
hello();
$f = new foo();
$f->hello();
