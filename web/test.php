<?php
require_once "../libs/Factory.php";
require_once "../libs/Logger.php";

use \PhpAsync\Factory;

$PhpAsync = new Factory();

$cmd = __DIR__."/asyncTest.php";

for ($i = 0; $i <= 1; $i++) {
	$pid = $PhpAsync->start($cmd);
	echo "Pid: " . $pid . "\n";
}
