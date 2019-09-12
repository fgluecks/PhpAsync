<?php
require_once "../vendor/autoload.php";

use \PhpAsync\Factory;

$PhpAsync = new Factory();

$cmd = __DIR__ . "/asyncTest.php";

for ($i = 0; $i <= 1; $i++) {
	$pid = $PhpAsync->start($cmd, [$i, 'Hello world']);
	echo "Pid: " . $pid . "\n";
}
