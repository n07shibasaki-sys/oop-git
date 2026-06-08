<?php

require_once 'Grocery.php';

class Meat extends Grocery{

  private $animal_type;
  private $cut;

  public function __construct($store_name,$product_name,$price,$animal_type, $cut){
    $this->store_name = $store_name;
    $this->product_name = $product_name;
    $this->price = $price;
    $this->animal_type = $animal_type;
    $this->cut = $cut;
  }

  public function announce(){
    return "Enjoy premium {$this->cut} and {$this->animal_type} for you {$this->price}!<br><br>";
  }

  public function displaydetails(){
    return "<strong>Price</strong>".$this->price."<br>".
           "<strong>Animal Type</strong>".$this->animal_type."<br>".
           "<strong>Cut</strong>".$this->cut."<br>";
    }

}






?>