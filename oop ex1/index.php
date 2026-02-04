<?php
require_once "Product.php";

$shirt = new Product();
$shirt->name = "T shirt";
$shirt->price = 10;
$shirt->vat = 0.1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Product is: <?= $shirt->name ?></h1>
    <h1> Product price is: <?= $shirt->price ?></h1>
    <h1>VAT: <?= $shirt->vat?></h1>
    <h1>Final Price: <?= $shirt->price - ($shirt->vat * $shirt->price)?></h1>
</body>
</html>