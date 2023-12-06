<?php

abstract class Animal {

    function __construct($name, private $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo "Name: " . $this->name . ", age - " . $this->age . "<br>";
    }

    public function birthday($amount) {
        $this->age = $this->age + $amount;
    }

    abstract static function payAttention();
}
?>