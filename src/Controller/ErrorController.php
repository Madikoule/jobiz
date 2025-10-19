<?php

namespace App\Controller;


class ErrorController extends Controller
{
    public function show(string $errorMessage ): void
    {
        $this->render("error/default",[
            "errorMessage" => $errorMessage
        ]);
    }


}