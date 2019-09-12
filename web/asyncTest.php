<?php
sleep(5);
echo "Async \n";
echo "Parameters " . join(" ", array_slice($argv, 1)) . "\n";
echo "PID: " . getmypid() . "\n\n";
