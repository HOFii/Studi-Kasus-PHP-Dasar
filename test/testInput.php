<?php

require_once "../helper/input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;