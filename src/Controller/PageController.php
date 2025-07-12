<?php

namespace App\Controller;

class PageController 
{
    public function home(): void
    {
        $this->render();
    }

    public function about(): void
    {
        $this->render();
    }


    protected function render(string $path): void
    {
        $filepath = APP_ROOT. "/templates/$path.php";

        require_once $filepath;
    }

}

?>