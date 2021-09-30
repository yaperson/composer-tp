<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('First message');
$logger->info('Second message');

print("1) ok</br>");

$loader = new FilesystemLoader('../templates');

print("2) ok</br>");

$twig = new Environment($loader, ['cache' => '../cache']);

print("3) ok</br>");
