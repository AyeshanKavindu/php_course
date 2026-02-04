<?php

require_once "Shape.php";
require_once "Rectangle.php";



$redRectangle = new Rectangle(10,5,"Red");


require_once "Circle.php";
$redCircle = new Circle(5, "Yellow");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rectangle Width: <?= $redRectangle->getWidth() ?></h1>
    <h1>Rectangle Length: <?= $redRectangle->getLength() ?></h1>
    <h1>Rectangle Area: <?= $redRectangle->calculateArea() ?></h1>
    <h1>Rectangle Color: <?= $redRectangle->getColor() ?></h1>
    <h1>Circle Radius: <?= $redCircle->getRadius() ?></h1>
    <h1>Circle Area: <?= $redCircle->calculateArea() ?></h1>
    <h1>Circle Color: <?= $redCircle->getColor() ?></h1>
    <h1>Total Shapes Created: <?= Shape::getCount() ?></h1>

</body>
</html>