<?php
require_once 'grocery.php';

// ---Child Class---
class Fruit extends Grocery{
  private $color;
  private $taste;

  public function __construct($store_name, $product_name, $price, $color, $taste){
    $this->store_name = $store_name;
    $this->product_name = $product_name;
    $this->price = $price;
    $this->color = $color;
    $this->taste = $taste;
  }

  public function announce(){
    return "Enjoy this {$this->color} and {$this->taste} {$this->product_name} for you {$this->price}!<br><br>";
  }

  public function displaydetails(){
    return "<strong>Price</strong>".$this->price."<br>".
           "<strong>Color</strong>".$this->color."<br>".
           "<strong>Taste</strong>".$this->taste."<br>";
    }



}

?>
