<?php

require_once "Rectangle.php";

$redRectangle = new Rectangle(10,5,"Red");

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
</body>
</html>