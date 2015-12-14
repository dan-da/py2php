<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
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

