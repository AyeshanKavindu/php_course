<?php

require_once "Ticket.php";
$ticket = new Ticket();
$ticket->setquantity(5);   
$ticket->setUnitPrice(100);                     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Total Price: <?= $ticket->getTotalPrice() ?></h1>
</body>
</html>