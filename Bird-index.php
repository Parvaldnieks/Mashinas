<?php
include "Bird.php";

$bird1 = new Bird("Railijs🐤", 21);
$bird1->name;

$bird2 = new Bird("Didzis🦅 - ", 420);
$bird2->name;

$bird3 = new Bird("Griezni🎯", 69);
$bird3->name;

echo $bird1->name . " " . $bird2->name;
echo $bird3->fly();
echo "<br>";
?>