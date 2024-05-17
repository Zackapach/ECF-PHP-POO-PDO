<?php
require "Animal.php";

abstract class Mammal extends Animal
{
    protected string $furColor;

    public function __construct(string $name, int $age, string $furColor)
    {
        parent::__construct($name, $age);
        $this->setFurColor($furColor);
    }

    public function getFurColor(): string
    {
        return $this->furColor;
    }

    public function setFurColor(string $furColor): void
    {
        $this->furColor = $furColor;
    }
}