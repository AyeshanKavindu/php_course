<?php
require_once "Person.php";
$person = new Person("Ayeshan","Kavindu",26);

require_once "Employee.php";
$employee = new Employee("Ayeshan","Kavindu",26,"Toyota","Developer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Full Name: <?= $employee->getFullName() ?></h1>
    <h1> Age: <?= $employee->getAge() ?></h1>
    <h1> Company: <?= $employee->getCompany() ?></h1>
    <h1> Position: <?= $employee->getPosition() ?></h1>

</body>
</html>