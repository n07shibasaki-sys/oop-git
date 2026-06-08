<?php

// ---Parent Class---
class Grocery{
  protected $store_name; //protected property can be accessed by child classes 
  protected $product_name;
  protected $price;

  public function OpenStore(){
    return "Welcome to {$this->store_name}! We have {$this->product_name} for you at a price of {$this->price}.";
  }  







}
?>