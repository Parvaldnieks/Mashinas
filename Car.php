<?php

class Car {
    public $brand;
    private $mileage;

    public function __construct($cBrand, $cMileage) {
        $this->brand = $cBrand;
        $this->mileage = $cMileage;
    }

    public function __destruct() {
        echo $this->brand . " is dead💀" . "<br>";
    }

    public function drive() {
        echo " Brauc ļoti ātri😱 " . "<br>";
    }

    public function increaseMileage($amount) {
        $this->mileage = $this->mileage + $amount;
    }

    static function makeNoice() {
        echo "Beep, Beep!";
    }
}
?>