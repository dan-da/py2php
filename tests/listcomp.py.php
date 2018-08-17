<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(10)) as $x ) {yield pow($x, 2);}}, get_defined_vars() ));
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(10)) as $x ) {if((($x % 2) == 0)) yield pow($x, 2);}}, get_defined_vars() ));
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(10)) as $x ) {if(!((($x % 2) == 0))) yield pow($x, 2);}}, get_defined_vars() ));
foreach( pyjslib_list(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list([1, 2, 3]) as $x ) {foreach( pyjslib_list('abc') as $y ) {foreach( pyjslib_list('xyz') as $z ) {yield [$x, $y, $z];}}}}, get_defined_vars() )) as $a ) {
    pyjslib_printnl($a);
}
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list([1, 2, 3]) as $x ) {foreach( pyjslib_list([3, 1, 4]) as $y ) {if(($x != $y)) yield [$x, $y];}}}, get_defined_vars() ));
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(100)) as $y ) {if((($y % 2) == 0)) if((($y % 5) == 0)) foreach( pyjslib_list('ab') as $z ) {yield [$y, $z];}}}, get_defined_vars() ));
$matrix = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(4)) as $i ) {yield pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list($matrix) as $row ) {yield $row[$i];}}, get_defined_vars() );}}, get_defined_vars() ));
pyjslib_printnl(pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list(pyjslib_range(4)) as $i ) {yield pyjslib_listcomp( function($__vars) { extract($__vars); foreach( pyjslib_list([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]]) as $row ) {yield $row[$i];}}, get_defined_vars() );}}, get_defined_vars() ));

