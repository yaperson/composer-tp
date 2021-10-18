# TWIG/MONOLOG


## Les prés requis :
- PHP (minimum 7.4.24 par sécurité https://www.php.net/downloads.php)
- Composer (https://getcomposer.org/download/)


## rappel :

Monolog permet de créer des logs grâce auquel on peut garder une trace de certaines actions faites par les utilisateurs ou le code.

Twig est un moteur de templates pour le langage de programmation PHP, utilisé par défaut par le framework Symfony.


## Pour commencer :



Cette commande permet de générer le fichier Composer.json.

> composer init




Pour être sur d’avoir les package de monolog et twig, il faut les réclamer : 

>composer require monolog/monolog <br>
>composer require twig/twig




Si cela ne fonctionne pas, créer manuellement le fichier Composer.json et y mettre le code suivant (en adaptant bien sur nom/prénom/sources/si besoin la licence)


        {
            "name": "legryan/composer-tp",
            "type": "project",
            "require": {
                "monolog/monolog": "^2.3",
                "twig/twig": "^3.3"
            },
            "license": "MIT",
            "authors": [
                {
                    "name": "yaperson",
                    "email": "yanis.legrand.1@gmail.com"
                }
            ],
            "autoload": {
                "psr-4": {"App\\": "src/"}
            }    
        }


## Installation des packages :


> composer install


### Créer les dossiers src, template et log → 

src => contiendra le code php </br>
template => contiendra les vues en .html.twig </br>
log => contiendra les log 

![les dossiers](/doc_images/01.png)


## Installation de monolog :

Dans un fichier php, rangé dans /src. <br>
Ajouter le code ci dessous :

        <?php
        require_once '../vendor/autoload.php'; // fait appel à l’autoload (l’équivalent d'un include)
        
        use Monolog\Logger; // indique l’utilisation de la Classe Monolog\Logger
        use Monolog\Handler\StreamHandler; // et la Classe Monolog\Logger\StreamHandler
        
        // create a log channel
        $log = new Logger('main');
        // créer un dossier /log et un fichier debug.log
        $log->pushHandler(new StreamHandler('../log/debug.log', Logger::WARNING));
        
        // add records to the log
        $log->warning('Qulqu\'un abuse du système');
        $log->error('server disconnect');





Le résultat, à chaque fois qu’un utilisateur se connecte sur la page, un fichier debug.log est créer puis des log sont écrits : 

![les dossiers](/doc_images/03.png)

Bravo, vous avez maintenant les base de monolog, pour plus de renseignement, rendez vous sur la doc officielle → [ici](https://github.com/Seldaek/monolog/blob/main/doc/01-usage.md#log-levels). <br>


## Installation de twig :


### Créer le fichier .html.twig → 

dans template => contiendra les vues en .html.twig

![les dossiers](/doc_images/02.png)

Le fichier .html.twig est un html qui sera pris en charge par twig.<br>
La syntaxe reste celle de HTML.

![les dossiers](/doc_images/03.png)

### On importe les classes : 

Dans le même fichier php que pour monolog, ajouter les import de classes de twig :

        <?php
        require_once '../vendor/autoload.php';
        
        use Monolog\Logger;
        use Monolog\Handler\StreamHandler;
        use Twig\Loader\FilesystemLoader; // on ajoute l’import des classes pour twig
        use Twig\Environment;
 

        // on créer les objets pour utiliser twig
        
        // indique l’emplacement des vues
        $loader = new FilesystemLoader('../template'); 
        
        // créer un dossier cache
        $twig = new Environment($loader, ['cache' => '../cache']);  
        
        try {
            $message = "Mon message !";
            echo $twig->render('index.html.twig', [ //indique quel vue on utilise
                'title' => 'Liste des utilisateurs', // un titre
                'Message' => $message, // un message
                // on peut ajouter ce que l’on veut
            // ‘desChiffres’ => ‘0 1 2 3 4 5...’,
                ]
            );    
        } catch(PDOException $e) {
            print('erreur de connection : ' . $e->getMessage());
        }



## Dans la vue :

en respectant la syntaxe < balise> {{ desChiffres }} </ balise> on peut afficher dynamiquement le contenu du php dans des balise html, sans mélanger les deux grâce à twig

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
            <body>
                <h1>{{title}}</h1>  
                <p>{{Message}}</p>
            </body>
        </html>
 
## Résultat → 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Liste des utilisateurs</h1>  
        <p>Mon message !</p>
    </body>
</html>