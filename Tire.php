<?php

class tire {
    public function __construct(public $size, public $type, private $quality) {
    }

    function __destruct() {
        echo "BOOM! <br><br>";
    }
}
?>