<?php

class Fruit{
  // Properties = variables

  private $name; //apple
  private $price; //3.2
  public $color; //red

  // Methods = functions

//----Constructor Method----
public function __construct($new_name, $new_price, $new_color){
  $this->name = $new_name;
  $this->price = $new_price;
  $this->color = $new_color;
}  

  public function showInfo(){
    // echo "Name:".$this->name ."<br>";
    echo "Name: {$this->name} <br>";
    echo "Price: {$this->price} <br>";
    echo "Color: {$this->color} <br>";
    echo "<hr>";
  }

  // Setters and Getters Methods
  public function getName(){
    return $this->name;
  }
}  


  // Instance of a class = object
  $apple = new Fruit("Apple", 3.2, "red");
  $banana = new Fruit("Banana", 1.5, "yellow");
  $orange = new Fruit("Orange", 2.0, "orange");

  // Accessing properties and methods
  $apple->showInfo();
  $banana->showInfo();
  $orange->showInfo();


?>