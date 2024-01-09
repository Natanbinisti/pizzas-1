<?php

namespace App\Controller;
use Core\Http\Response;
use Core\Controller\Controller;

class PizzasController
{

    public function index():Response
    {



        return $this->render("pizzas/index", [
            "pageTitle"=> "LES PIZZAS"

        ]);
    }



}