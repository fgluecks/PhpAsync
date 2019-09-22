<?php

namespace PhpAsync;

use RuntimeException;

class Logger
{
	public static $logDir = __DIR__ . "/../logs/";
	public static $logFile = "PhpAsync.log";

	public static function write($text)
	{
		if (!file_exists(self::$logDir)) {
			mkdir(self::$logDir);
		}

		$text = date('Y-m-d H:i:s O') . " | " . $text . "\n";

		if (!file_put_contents(self::$logDir . self::$logFile, $text, FILE_APPEND)) {
			throw new RuntimeException("unable to write log");
		}
	}
}