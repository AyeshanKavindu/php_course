<?php
require_once "Person.php";
$person = new Person("Ayeshan","Kavindu",26);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Full Name: <?= $person->getFullName() ?></h1>
    <h1> Age: <?= $person->getAge() ?></h1>
</body>
</html>