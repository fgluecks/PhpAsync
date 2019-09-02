<?php
require_once __DIR__ . "/../vendor/autoload.php";

use \PhpAsync\Child;

$Child = new Child(getmypid());
$Child->runCmd($argv[1]);
