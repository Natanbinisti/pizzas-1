<?php

namespace App\Repository;

use App\Entity\Pizza;
use Core\Attributes\TargetEntity;
use \Core\Repository\Repository;

#[TargetEntity(name: Pizza::class)]
class PizzaRepository
{
    public function insert(string $name,int $size ):void
    {
        $query = $this->pdo->prepare("INSERT INTO pizzas Set name= :name, size= ,size");
        $query->execute([
            "name"=>$name,
            "size"=>$size
        ]);
    }
    public function update(string $name,int $size, int $id):void
    {
        $query = $this->pdo->prepare("UPDATE  pizzas Set name= :name, size= ,size where id= :id");
        $query->execute([
            "name"=>$name,
            "size"=>$size,
            "id"=>$id
        ]);
    }
}
