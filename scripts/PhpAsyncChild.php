<?php
require_once __DIR__."/../libs/Child.php";
require_once __DIR__."/../libs/Logger.php";

use \PhpAsync\Child;

$Child = new Child(getmypid());
$Child->runCmd($argv[1]);
