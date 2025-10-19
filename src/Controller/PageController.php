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

}

?>