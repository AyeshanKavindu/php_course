<?php 
require_once "Car.php";

$benz = new Car();
$benz->brand = "Benz";
$benz->maxSpeed = 250;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Example</title>
</head>
<body>
    <h1>Example Objects</h1>
    <h2>Car brand: <?=$benz->brand  ?></h2>
    <h2>Car max speed: <?=$benz->maxSpeed  ?></h2>
</body>
</html>