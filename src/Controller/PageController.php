<?php

namespace App\Controller;

class PageController extends Controller
{
    public function home(): void
    {
        $gretting = "hello";
        $name = "John";
            
        $this->render("page/home" , [
            "gretings" => $gretting,
            "name" => $name,
        ]);
    }

    public function about(): void
    {
        $this->render("page/about");
    }


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

?>