<?php 
require_once "Car.php";

$car = new Avanza();
echo $car->drive();
echo $car->isMaintance();
echo $car->getBrand();

?>