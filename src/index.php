<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('First message');
$logger->info('Second message');

print("ok");