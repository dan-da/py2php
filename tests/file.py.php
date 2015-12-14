<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
require_once( 'os.php');
$f_in = pyjslib_open('file.py');
$outfile = '/tmp/file.py.test';
$f_out = pyjslib_open($outfile, 'w');
$lines = $f_in->readlines();
$f_out->writelines(array_slice($lines, null, 4));
pyjslib_printnl($f_out->closed);
$f_in->close();
$f_out->close();
pyjslib_printnl($f_out->closed);
pyjslib_printnl('---');
$f_iter = pyjslib_open('/tmp/file.py.test');
foreach( $f_iter as $line ) {
    pyjslib_print($line);
}
pyjslib_printnl('---');
$f_iter->seek(20);
pyjslib_printnl($f_iter->read(10));
os::remove($outfile);

