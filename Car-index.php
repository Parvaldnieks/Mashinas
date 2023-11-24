<?php
include "Car.php";

$car1 = new Car("Honda - ", 21);
$car1->brand;

$car2 = new Car("Dodge - ", 420);
$car2->brand;

$car3 = new Car("Toyota - ", 69);
$car3->brand;

echo $car1->brand;
echo $car1->drive();
echo "<br>";
?>