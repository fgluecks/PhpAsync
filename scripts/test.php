<?php
require_once "../libs/PhpAsync.php";

$PhpAsync = new PhpAsync();

$cmd = "php asyncTest.php";

echo "------\n";
echo "Pid: " . $PhpAsync->start($cmd) . "\n";
echo "------\n";
