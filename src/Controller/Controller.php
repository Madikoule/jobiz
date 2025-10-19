<?php 

namespace App\Controller;

    class Controller
    {
        protected function render(string $path, array $params =[]): void
        {
            $filepath = APP_ROOT. "/templates/$path.php";
    
            if (!file_exists($filepath)) {
                echo "Le fichier $filepath n'existe pas";
            } else {
                //va transformer chaque clé du tableau en variable
                extract($params);
                require_once $filePath;
            }
    
        }
    }