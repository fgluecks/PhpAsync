<?php
$vendorDir = __DIR__ . "/../vendor/autoload.php";

if (!file_exists($vendorDir)) {
	$vendorDir = __DIR__ . "/../../../autoload.php";
}

require_once $vendorDir;

use \PhpAsync\Child;

$Child = new Child(getmypid());

$Child->runCmd($argv[1], array_slice($argv, 2));
