<?php 
$meals = [
    ["mealName" => "Thali", "price" => 10],
    ["mealName" => "Palak Paneer", "price" => 11],
    ["mealName" => "Aloo Gobi", "price" => 13],
];

$total = 0;

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
            $total += $meal["price"]; ?>
            <li>Name: <?= $meal["mealName"] ?> - Price: <?= $meal["price"] ?></li>
        <?php }echo "Your Total is $total"; ?>
    </ul>

</body>
</html>
