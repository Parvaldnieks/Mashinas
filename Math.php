<?php

class Math {

    static function addTwo($num1, $num2) {
        echo "AddTwo: " . $num = $num1 + $num2;
    }

    static function factorial($num) {
        $factorial = 1;
        for($i = 1; $i <= $num; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }

    static function sum($mas) {
        $sum;
        for($i = 0; $i <=$mas; $i++) {
            $sum = $mas[$i] + $sum;
        }
        return $sum;
    }
}
?>