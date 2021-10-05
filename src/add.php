<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\UserManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start...');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

require_once("conf.php");

try {
    if (isset($_POST['email'])&&(isset($_POST['password']))){
        $db = new PDO($dsn, $usr, $pwd);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $newuser = new UserManager($db);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $newuser->addUser($_POST['email'], $password);
        header('Location: connect.php');
    }
    
    echo $twig->render('add.html.twig', [
        'title' => 'Nouvel utilisateur',
        ]
    );    
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
}


?>



