<?php

require_once "Animal.php";

class Bird extends Animal
{
    public function __construct($name, $breed)
    {
        $this->name = $name;
        $this->species = "Bird";
        $this->breed = $breed;
    }

    public function speak()
    {
        return "{$this->name} says: Chirp! Chirp!<br>";
    }
}
?>