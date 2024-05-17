<?php 

abstract class Animal
{
    protected string $name;
    protected int $age;

  
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    
    abstract function makeSound():string;
    abstract function move():string;


    
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}