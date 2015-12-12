<?php
require_once('py2phplib.php');
class foo {
    function __construct() {
        $this->bar = 'hey';
    }
    function talk() {
    }
}
$f = new foo();
pyjslib_printnl(method_exists($f, 'bar'));
pyjslib_printnl(method_exists($f, 'talk'));

