<?php
require_once "Product.php";

$shirt = new Product("T shirt",10,0.1);
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
    <h1>Final Price (with VAT): <?= $shirt->getPriceWithTax() ?></h1>
</body>
</html>