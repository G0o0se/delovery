<?php

require_once __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('DEBUG LOGGER');
$log->pushHandler(new StreamHandler(__DIR__.'/log.txt', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->error('q');
$log->error('w');
$log->error('e');
