<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["firstName"])) {
        echo htmlspecialchars($_GET["firstName" ]. "is the best name in the world!");

    } else {
        echo "first name is missing in url";
    }
    ?>
</body>
</html>