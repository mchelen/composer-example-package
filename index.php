<?php

require "vendor/autoload.php";
require "Foo.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('example.log', Logger::DEBUG));

$foo = new Foo($log);

$foo->bar("qux");



