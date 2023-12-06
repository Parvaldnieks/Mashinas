<?php
include "Car.php";
include "Tire.php";
include "Train.php";
include "Dog.php";
include "Cat.php";
include "Math.php";

// $car1 = new Car("Honda - ", "11", "slicks", 21);
// $car1->brand;

// $car2 = new Car("Dodge - ", "21", "burned", 420);
// $car2->brand;

// $car3 = new Car("Toyota - ", "15", "stock", 69);
// $car3->brand;

// $myCar = new Car("BMW", 0.01);

//-------------------------VILCIENS----------------------


// $train1 = new Train("Škoda", "10", "2400");
// $train1->brand;

// $train2 = new Train("Volvo", "100", "26499");
// $train2->brand;


//-------------------------------------------------------

// $tire = new Tire(21, "Burnt slicks", "almost done");
// echo "Riepas izmers - " . $tire->size . "<br>";
// echo "Riepas tips - " . $tire->type . "<br>";

// echo "<br>" . $car1->brand;
// echo $car1->drive() . "<br>";
// echo $car1::$describe;

// $car3->increaseMileage(240);

// echo "<br>";
// Car::makeNoice();
// echo "<br>";

// Train::makeNoice();


// $dog1 = new Dog("Reksis", 6);
// $dog1->name;
// $dog2 = new Dog("Didzis", 21);
// $dog2->name;

// Dog::payAttention();

// $dog1->birthday(1);

//----------------------------------------CAT-----------------------------


// $cat1 = new Cat("Minics", 2);
// $cat1->name;
// $cat2 = new Cat("Brincis", 3);
// $cat2->name;

// Cat::payAttention();

// $cat1->birthday(1);


echo "<br>" . Math::addTwo(4, 9);
echo "<br>Factorial: " . Math::factorial(10);
$mas = [2, 5, 9];
Math::sum();
?>