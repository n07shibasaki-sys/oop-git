<?php

require_once "Animal.php";

class Cat extends Animal{
    public function __construct($name, $breed)
    {
        $this->name = $name;
        $this->species = "Cat";
        $this->breed = $breed;
    }

    public function speak()
    {
        return "{$this->name} says: Meow!<br>";
    }
}

?>