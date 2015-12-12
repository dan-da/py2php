<?php
require_once('py2phplib.php');
function find($ordered_list,$element_to_find) {
    foreach( $ordered_list as $element ) {
        if (($element == $element_to_find)) {
            return true;
        }
    }
    return false;
}
$l = [2, 4, 6, 8, 10];
pyjslib_printnl(find($l, 5));
pyjslib_printnl(find($l, 10));
pyjslib_printnl(find($l, -1));
pyjslib_printnl(find($l, 2));

