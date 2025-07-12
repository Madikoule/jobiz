<?php

 // charger l'autoload
    require_once __dir__ . "/../vendor/autoload.php";

    // on définit une constante pour avoir le chemin racinde de l'app
    define('APP_ROOT', dirname(__DIR__));

    use App\Controller\PageController;

    $PageController :: new PageController;
    $PageController->test();

?>