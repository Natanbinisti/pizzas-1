<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name: "pizzas")]
#[TargetRepository(PizzaRepository::class)]
class thePizza
{
    private int $id;
    private string $name;
    private string $size;

    public function getName(): string
    {
        return $this->name;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getSize(): string
    {
        return $this->size;
    }
    public function setName(): string
    {
        return $this->name;
    }
    public function setId(): int
    {
        return $this->id;
    }
    public function setSize(): string
    {
        return $this->size;
    }

}
