<?php
require "Animal.php";

abstract class Bird extends Animal
{
    protected float $wingSpan;

   
    public function __construct(string $name, int $age, string $wingSpan)
    {
        parent::__construct($name, $age);
        $this->setWingSpan($wingSpan);
    }

    
    public function getWingSpan(): string
    {
        return $this->wingSpan;
    }

    public function setWingSpan(string $wingSpan): void
    {
        $this->wingSpan = $wingSpan;
    }
}