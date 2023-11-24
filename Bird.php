<?php

class Bird {
    public $name;
    private $age;

    public function __construct($cName, $cAge) {
        $this->name = $cName;
        $this->age = $cAge;
    }

    public function __destruct() {
        echo $this->name . " is dead💀". "<br>";
    }

    public function fly() {
        echo "Viņš lido 😱 " . "ar " .$this->name . "<br>";
    }
}
?>