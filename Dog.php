<?php

class Dog {

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        echo $this->name . " age " . $this->age . "<br>";
    }

    static function payAttention() {
        echo "Woof!";
    }
}
?>