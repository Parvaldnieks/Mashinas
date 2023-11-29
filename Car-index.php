<?php
include "Car.php";
include "Tire.php";

$car1 = new Car("Honda - ", "11", "slicks", 21);
$car1->brand;

$car2 = new Car("Dodge - ", "21", "burned", 420);
$car2->brand;

$car3 = new Car("Toyota - ", "15", "stock", 69);
$car3->brand;

$tire = new Tire(21, "Burnt slicks", "almost done");
echo "Riepas izmers - " . $tire->size . "<br>";
echo "Riepas tips - " . $tire->type . "<br>";

echo $car1->brand;
echo $car1->drive();

echo "<br>";
Car::makeNoice();
echo "<br>";
?>