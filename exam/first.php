<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Login</title>
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}
?>

<form action="" method="post">
    <p>
        <label for="pin">Enter Your Pin:</label>
        <input type="password" name="pin" id="pin">
    </p>
    <button type="submit">Ok</button>
</form>

<?php
if (isset($_POST["pin"])) {
    $correctPin = "abc";
    $pin = $_POST["pin"];

    if ($pin === $correctPin) {
        echo '<p style="color: green;">Access Granted</p>';
    } else {
        echo '<p style="color: red;">Access Denied</p>';
    }
}
?>

</body>
</html>
