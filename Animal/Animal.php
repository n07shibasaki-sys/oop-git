<?php

class Animal
{
    protected $name;
    protected $species;
    protected $breed;

    public function getName(){
        return $this->name;
    }

    public function introduction(){
        return "Hello. I am {$this->getName()}.<br>
                I am a {$this->species} and my breed is {$this->breed}.<br><br>";
    }
}
?>