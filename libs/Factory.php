<?php

namespace PhpAsync;

use InvalidArgumentException;
use RuntimeException;

class Factory
{
	private $phpCmd = "php";
	private $childScript = __DIR__ . "/../scripts/PhpAsyncChild.php";

	public function start($cmd)
	{
		if (!file_exists($cmd)) {
			throw new InvalidArgumentException("File does not exists: " . $cmd);
		} else {
			$descriptorspec = [];
			$pipes = [];

			$procHandler = proc_open($this->phpCmd . " " . $this->childScript . " " . $cmd . " &", $descriptorspec, $pipes);

			if (is_resource($procHandler)) {
				$procData = proc_get_status($procHandler);
				proc_close($procHandler);

				Logger::write($procData['pid']." | start child process");

				return $procData['pid'];
			} else {
				throw new RuntimeException("unable to start child process");
			}
		}
	}
}
