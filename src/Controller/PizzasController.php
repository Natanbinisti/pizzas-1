<?php

namespace App\Controller;
use Core\Http\Response;
use Core\Controller\Controller;

class PizzasController
{

    public function index()
    {

        $pizzaRepository = new PizzaRepository();
        $pizzas = $pizzaRepository->findAll();


        return $this->render("pizza/index",["pageTitle"=>"LES PIZZAS","pizzas"=>$pizzas]);
    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }
        $id = $_GET['id'];

        $pizzaRepository = new PizzaRepository();
        $pizza = $pizzaRepository->find($id);


        return $this->render("pizza/show",["pageTitle"=>"Une pizza","pizza"=>$pizza]);
    }


    public function delete()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect("?type=pizza&action=index");
        }
        $id = $_GET['id'];

        $pizzaRepository = new PizzaRepository();
        $pizzaRepository->delete($id);

        return $this->redirect("?type=pizza&action=index");
    }

    public function insert()
    {
        $this->render("pizza/create",["pageTitle"=>"Nouvelle pizza"]);

        if(isset($_POST['name']) && isset($_POST['size']))
        {
            $name = $_POST['name'];
            $size = $_POST['size'];

            $pizzaRepository = new PizzaRepository();
            $pizzaRepository->insert($name,$size);

            return $this->redirect("?type=pizza&action=index");
        }
    }

    public function update()
    {
        $id = $_GET['id'];
        $pizzaRepository = new PizzaRepository();
        $pizza = $pizzaRepository->find($id);

        $this->render("pizza/update",["pageTitle"=>"Modifier pizza","pizza"=>$pizza]);

        if(isset($_POST['name']) && isset($_POST['size']))
        {
            $name = $_POST['name'];
            $size = $_POST['size'];
            $pizzaRepository->update($name,$size,$id);

            return $this->redirect("?type=pizza&action=index");
        }


    }
}