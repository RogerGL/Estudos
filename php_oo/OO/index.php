<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");

$ferrari->engine = 300;
$ferrari->setDoors(2);

$bmw = new Car("BMW","blue");

$bmw->engine = 250;
$bmw->setDoors(4);

$mustang = new Car("Mustang","Black");

$mustang->engine = 270;
$mustang->setDoors(4);

$m = new Motorcycle("Honda","Gray");

$m->engine = 150;


echo $ferrari->getDoors();


//var_dump($mustang);