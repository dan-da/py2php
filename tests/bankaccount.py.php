<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
class BankAccount {
    function __construct() {
        $this->balance = 0;
    }
    function withdraw($amount) {
        $this->balance -= $amount;
        return $this->balance;
    }
    function deposit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }
}
$a = new BankAccount();
$b = new BankAccount();
$a->deposit(100);
$b->deposit(50);
$b->withdraw(10);
$balance = $a->withdraw(10);
pyjslib_printnl(['balance:', $balance], true);

