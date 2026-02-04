<?php 
$meals = [
    ["mealName" => "Thali", "price" => 10],
    ["mealName" => "Palak Paneer", "price" => 11],
    ["mealName" => "Aloo Gobi", "price" => 13],
];

function getPriceWithVAT(int $price, int $vat): int
{
    return $price * (1 + $vat/100);

}

$total = 0;
$priceWithTax = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach ($meals as $meal) { 
            $total += $meal["price"];
             ?>
            <li>Name: <?= $meal["mealName"] ?> - Price: <?= $meal["price"] ?></li>
        <?php }
        $priceWithTax = getPriceWithVAT($total, 10);
        echo "Your Total is $total";
        echo "price with tax $priceWithTax" ?>
    </ul>

</body>
</html>
