<?php
require_once('py2phplib.php');
class BankAccount
{
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
pyjslib_printFunc(array( 'balance:', $balance ), true);
