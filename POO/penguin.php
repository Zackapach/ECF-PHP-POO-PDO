<?php 
<?php
require "Mammal.php";

abstract class Penguin extends Mammal
{
    protected string $breed;

   
    public function __construct(string $name, int $age, string $furColor, float $breed)
    {
        parent::__construct($name, $age, $furColor);
        $this->setbreed($breed);
    }

    
    abstract function bark():string;

    
    public function getbreed(): float
    {
        return $this->breed;
    }

    public function setbreed(float $breed): void
    {
        $this->breed = $breed;
    }
}
