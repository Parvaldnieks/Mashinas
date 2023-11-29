<?php

class Train {
    public function __construct(public $brand, public $trackGauge, private $mileage) {
    }

    public function __destruct() {
        echo $this->brand . "is Dead" . $this->mileage . "<br>";
    }
}
?>