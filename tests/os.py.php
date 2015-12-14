<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
require_once( 'os.php');
$name = '/tmp/os.py.test1';
$fd = os::open($name, os::O_WRONLY | os::O_CREAT);
os::write($fd, 'Hello from python os module.');
os::close($fd);
$info = os::stat($name);
pyjslib_printnl('size of file ' . $name . ' is ' . pyjslib_str($info->st_size) . ' bytes');
$linkname = '/tmp/os.py.test2';
os::symlink($name, $linkname);
$fd = os::open($linkname, os::O_RDONLY);
$buf = os::read($fd, 1000);
os::close($fd);
pyjslib_printnl($buf);
os::unlink($linkname);
os::unlink($name);

