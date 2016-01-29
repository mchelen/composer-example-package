<?php

require "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Some\Example\Foo;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$foo = new Foo($log);

$foo->bar("qux");



