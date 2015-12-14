<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
function mul_string($str,$size) {
    $buf = '';
    foreach( pyjslib_range($size) as $x ) {
        $buf = $buf . $str;
    }
    return $buf;
}
function print_horiz_line($size) {
    pyjslib_printnl(mul_string(' --- ', $size));
}
function print_vert_line($size) {
    pyjslib_printnl(mul_string('|    ', ($size + 1)));
}
$board_size = 6;
foreach( pyjslib_range($board_size) as $index ) {
    print_horiz_line($board_size);
    print_vert_line($board_size);
}
print_horiz_line($board_size);

