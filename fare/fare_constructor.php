<?php

class Fare {
  private $distance;
  private $age;
  private $fare;

  public function __construct($distance,$age){
    $this->age = $age;
    $this->distance = $distance; 
  }

  public function getAge(){
    return $this->age;
  }

  public function getDistance(){
    return $this->distance;
  }  

  public function setFare(){
    if ($this->distance <= 4){
      $this->fare = 8;
    } elseif($this->distance >4) {
      $this->fare = $this->fare + 4;
    }
      //apply discount 20%
      if ($this->age >= 60){
        $this->fare = $this->fare * 0.8;
      }

    }
  
  public function getFare(){
    return $this->fare;
  }
  
  
}


?>