<?php

// include "Classes/Manager/UserManager.php";
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\UserManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start...');

print("1) ok</br>");

$loader = new FilesystemLoader('../templates');

print("2) ok</br>");

$twig = new Environment($loader, ['cache' => '../cache']);

print("3) ok</br>");


require_once("conf.php");

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $UserManager = new UserManager($db);
    
    $users = $UserManager->getList();
    
    echo $twig->render('base.html.twig', [
        'title' => 'Liste des utilisateurs',
        'User' => $users,
        ]
    );    
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
}

