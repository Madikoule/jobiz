<?php 

namespace App\Routing;

class Router
{
    public function __construct()
    {
        require_once APP_ROOT. "/config/routes.php";
        
    }

}