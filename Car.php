<?php
include_once "Vehicle.php";

class Car extends Vehicle {
    static $describe = "I have 4 wheels";

    public function drive() {
        echo " Brauc ļoti ātri😱 " . "<br>";
    }

    static function makeNoice() {
        echo "Beep, Beep!";
    }
}
?>