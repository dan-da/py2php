<?php
require_once('py2phplib.php');
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

