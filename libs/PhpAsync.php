<?php

class PhpAsync
{

	public function start($cmd)
	{
		$descriptorspec = [];
		$pipes = [];

		$procHandler = proc_open($cmd . " &", $descriptorspec, $pipes);
		$procData = proc_get_status($procHandler);
		proc_close($procHandler);

		return $procData['pid'];
	}
}
