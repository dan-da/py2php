<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$map = ['fname' => 'woody', 'lname' => 'woodpecker', 'species' => 'bird', 'gender' => 'male'];
$map2 = [];
foreach( pyjslib_list($map) as $k => $v ) {
    $map2[$k] = $v;
}
pyjslib_printnl($map2['fname']);
pyjslib_printnl($map2['lname']);
pyjslib_printnl($map2['species']);
pyjslib_printnl($map2['gender']);
$map2 = [];
foreach( pyjslib_list($map) as $k => $v ) {
    $map2[$k] = $v;
}
pyjslib_printnl($map2['fname']);
pyjslib_printnl($map2['lname']);
pyjslib_printnl($map2['species']);
pyjslib_printnl($map2['gender']);

