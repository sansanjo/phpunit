--TEST--
phpunit --filter BankAccountTest BankAccountTest ../../Samples/BankAccount/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--filter';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = '../Samples/BankAccount/BankAccountTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

...

Time: %i seconds

OK (3 tests, 3 assertions)
