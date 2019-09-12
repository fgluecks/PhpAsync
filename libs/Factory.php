<?php

namespace PhpAsync;

use InvalidArgumentException;
use RuntimeException;

class Factory
{
	private $phpCmd = "php";
	private $childScript = __DIR__ . "/../scripts/PhpAsyncChild.php";

	public function start($cmd, $parameter = [])
	{
		if (!file_exists($cmd)) {
			throw new InvalidArgumentException("File does not exists: " . $cmd);
		} elseif (!is_array($parameter)) {
			throw new InvalidArgumentException("No string given - Parameter must be strings in an array");
		} else {
			$descriptorspec = [];
			$pipes = [];

			$procHandler = proc_open($this->phpCmd . " " . $this->childScript . " " . $cmd . " " . join(" ", $parameter) . " &", $descriptorspec, $pipes);

			if (is_resource($procHandler)) {
				$procData = proc_get_status($procHandler);
				proc_close($procHandler);

				Logger::write($procData['pid'] . " | start child process");

				return $procData['pid'];
			} else {
				throw new RuntimeException("unable to start child process");
			}
		}
	}
}
