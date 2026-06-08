<?php

class School{
    private $year;
    private $units;
    private $lab;

    public function __construct($year, $units, $lab){
        $this->year = $year;
        $this->units = $units;
        $this->lab = $lab;
    }

    public function computeTotal(){
        if ($this->year == 1) {
            $price = 550;
            $lab_fee = 3359;
        } elseif ($this->year == 2) {
            $price = 630;
            $lab_fee = 4000;
        } elseif ($this->year == 3) {
            $price = 470;
            $lab_fee = 2890;
        } else {
            $price = 501;
            $lab_fee = 3555;
        }

        $total = $price * $this->units;

        if ($this->lab == "Yes") {
            $total += $lab_fee;
        }

        return $total;
    }
}