<?php

class Fare {
  private $distance;
  private $age;
  private $fare;

  public function setAge($age){
    $this->age = $age;
  }

  public function getAge(){
    return $this->age;
  }

  public function setDistance($distance){
    $this->distance = $distance;  
  }

  public function getDistance(){
    return $this->distance;
  }  
  
  //first 4kilometers = 8 pesos
  //succeeding kilometres = 1peso per kilometer
  //age 60 and above = 20% discount

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