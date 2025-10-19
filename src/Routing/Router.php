<?php 


namespace App\Routing;

use App\Controller\ErrorController

use Exception;


class Router
{
    private $routes;
    public function __construct()
    {
        $this->routes = require_once APP_ROOT. "/config/routes.php";
    }


// ceci est une gestion des erreur 

    public function handleRequest(string $uri)
    {
        try{
            $path = $this->normalizePath($uri);  // retire les parametre -,espace etc..
            if (!isset($this->routes[$path])) {         // condition 
                throw new Exception("La route n'existe pas");
            }
            $route= $this->routes[$path];

            $controllerPath = $route["controller"];  // l'action
            $action = $route["action"];

            if (!method_exists($controllerPath)) {
                throw new Exception("La classe n'existe pas");
            }

            $controller = new $controllerPath();  // instance de mon controller
            if (!method_exists($controller, $action)) {
                throw new Exception("L'action n'existe pas");
            }
            $controller->$action();
        } catch (Exception $e) {
            $errorController = new ErrorController();
            $errorController->show($e->getMessage());
        }

    }


    public static function normalizePath(string $uri):string
    {
        $path = parse_url($uri, PHP_URL_PATH);  // recupere le chemin de l'url
        $PATH = rtrim($path, "/") . "/";
        return $path;
    }



}