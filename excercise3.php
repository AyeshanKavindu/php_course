<?php 
$userName = "ayeshan";
$age = 21;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($age < 18){
    echo "Our game is not suitable for players under the age of 18";
} else {
    echo "Welcome to our website $userName";
}
?>
</body>
</html>