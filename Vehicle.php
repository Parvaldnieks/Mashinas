<?php

abstract class Vehicle {
    public $brand;
    protected $mileage;

    static $description = "I am large and ViVi";

    public function __destruct() {
        echo $this->brand . " is dead at mileage💀" . $this->mileage . "km <br>";
    }

    function increaseMileage($amount) {
        $this->mileage = $this->mileage + $amount;
    }

    abstract static function makeNoice();
}

?>