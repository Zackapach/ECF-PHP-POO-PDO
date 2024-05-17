<?php
require "Mammal.php";

abstract class Dog extends Mammal
{
    protected float $tuskLength;

    
    public function __construct(string $name, int $age, string $furColor, float $tuskLength)
    {
        parent::__construct($name, $age, $furColor);
        $this->setTuskLength($tuskLength);
    }

    
    abstract function trumpet():string;

    
    public function getTuskLength(): float
    {
        return $this->tuskLength;
    }

    public function setTuskLength(float $tuskLength): void
    {
        $this->tuskLength = $tuskLength;
    }
}
