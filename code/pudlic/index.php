<?php


require_once '../classes/Car.php';
require_once '../classes/Salon.php';
require_once '../classes/System.php';
require_once '../classes/Wheels.php';

$newcarSalon = new Salon($newBody, $newUpholstery, $newHood);
$newBody = new Body();
$newUpholstery = new Upholstery();
$newHood = new Hood();
$newcarSystem = new System($newcpu, $newtransmission, $newengine);
$newcarWheels = new carWheels($newrubber, $newrims);
$car = new Car($newcarSalon, $newcarSystem,  $newcarWheels);



var_dump($car);
