<?php

class Fruit{
  // Properties = variables

  private $name; //apple
  private $price; //3.2
  public $color; //red

  // Methods = functions

  public function showInfo(){
    // echo "Name:".$this->name ."<br>";
    echo "Name: {$this->name} <br>";
    echo "Price: {$this->price} <br>";
    echo "Color: {$this->color} <br>";
    echo "<hr>";
  }

  public function calculateWITHVAT(){
    return $this->price * 1.19;
  }

  public function describeTotlPrice(){
    return "The {$this->name} costs {$this->calculateWITHVAT()} with VAT.";
  }

  // Setters and Getters Methods
  public function setName($new_name){
    $this->name = $new_name;
  }

  public function getName(){
    return $this->name;
  }

  public function setPrice($new_price){
    if($new_price < 0){
      $this->price = "Price cannot be negative.";
      // echo "Price cannot be negative.";
    }else{
      $this->price = $new_price;
    }
  }

  public function getPrice(){
    return (string)$this->price;
  }

  public function setColor($new_color){
    $this->color = $new_color;
  }

  // public function getColor(){
  //   return $this->color;
  // }
}

  //Instance of a class = Object

  $lin = new Fruit();
  $ayako = new Fruit();
  $noriko = new Fruit();
  $ami = new Fruit();
  $joe = new Fruit();

// access public methods
    $variable = "orange"; //ordinal variable

  $lin->setName("watermelon");
  $ayako->setName("pinapple");
  $noriko->setName("peach");
  $ami->setName("strawberry");
  $joe->setName($variable);

  $lin->setPrice(5.0);
  $ayako->setPrice(4.0); 
  $noriko->setPrice(3.0);
  $ami->setPrice(2.0);
  $joe->setPrice(-1); 

  echo "<h2>Fruit Name:</h2>";
  echo $lin->getName() . "<br>";
  echo $ayako->getName() . "<br>";
  echo $noriko->getName() . "<br>";
  echo $ami->getName() . "<br>";
  echo $joe->getName() . "<br>";

  echo "<hr>";

  echo "<h2>Fruit Price:</h2>";
  echo $lin->getPrice() . "<br>";
  echo $ayako->getPrice() . "<br>";
  echo $noriko->getPrice() . "<br>";
  echo $ami->getPrice() . "<br>";
  echo $joe->getPrice() . "<br>";

  // echo "<hr>";
  // echo "<h2>Fruit Infomation:</h2>";
  // $lin->showInfo();
  // $ayako->showInfo();
  // $noriko->showInfo();
  // $ami->showInfo();

  // $joe->showInfo();

// access public properties
  $lin->color = "green";
  $ayako->color = "yellow";
  $noriko->color = "pink";
  $ami->color = "red";
  $joe->color = "orange";

  // echo "<hr>";
  // echo "<h2>Fruit Infomation:</h2>";
  // $lin->showInfo();
  // $ayako->showInfo();
  // $noriko->showInfo();
  // $ami->showInfo();
  // $joe->showInfo();

?>