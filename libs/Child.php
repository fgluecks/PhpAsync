<?php

namespace PhpAsync;

use InvalidArgumentException;

class Child
{
	private $pid = null;
	private $phpCmd = "php";
	private $logDir = __DIR__ . "/../logs/childs/"; // "/tmp/PhpAsync/"

	public function __construct($pid)
	{
		if (!is_int($pid) or $pid < 1) {
			throw new InvalidArgumentException("invalid pid");
		}

		if (!file_exists($this->logDir)) {
			mkdir($this->logDir);
		}

		$this->pid = $pid;
	}

	public function runCmd($cmd, $parameter)
	{
		Logger::write($this->pid . " | child is running");

		$logfile = $this->logDir . date('Y-m-d') . "_" . $this->pid . ".log";

		$output = [];
		exec($this->phpCmd . " " . $cmd . " " . join(" ", $parameter) . " >> " . $logfile, $output);

		Logger::write($this->pid . " | child finished");
	}
}
