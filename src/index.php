<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('../log/debug.log', Logger::WARNING));

// add records to the log
$log->warning('Qulqu\'un abuse du système');
$log->error('server disconnect');

$loader = new FilesystemLoader('../template');
$twig = new Environment($loader, ['cache' => '../cache']);  

try {
    $message = "Mon message !";
    echo $twig->render('index.html.twig', [
        'title' => 'Liste des utilisateurs',
        'Message' => $message,
        ]
    );    
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
}