<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
pyjslib_printnl(pyjslib_listcomp( function() {foreach( pyjslib_foreachlist(pyjslib_range(10)) as $x ) {yield pow($x, 2);}}));
pyjslib_printnl(pyjslib_listcomp( function() {foreach( pyjslib_foreachlist(pyjslib_range(10)) as $x ) {if (($x % 2) == 0) yield pow($x, 2);}}));
foreach( pyjslib_foreachlist(pyjslib_listcomp( function() {foreach( pyjslib_foreachlist([1, 2, 3]) as $x ) {foreach( pyjslib_foreachlist('abc') as $y ) {foreach( pyjslib_foreachlist('xyz') as $z ) {yield [$x, $y, $z];}}}})) as $a ) {
    pyjslib_printnl($a);
}
pyjslib_printnl(pyjslib_listcomp( function() {foreach( pyjslib_foreachlist([1, 2, 3]) as $x ) {foreach( pyjslib_foreachlist([3, 1, 4]) as $y ) {if ($x != $y) yield [$x, $y];}}}));
pyjslib_printnl(pyjslib_listcomp( function() {foreach( pyjslib_foreachlist(pyjslib_range(100)) as $y ) {if (($y % 2) == 0) if (($y % 5) == 0) foreach( pyjslib_foreachlist('ab') as $z ) {yield [$y, $z];}}}));
$matrix = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];

