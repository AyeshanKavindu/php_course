<?php
require_once "header.php";
require_once "libs/games.php";


if (isset($_GET["id"])) { 
    $game = getGameById($_GET["id"], $games);
    ?>

    <h1><?= htmlentities($game["name"])   ?></h1>
    <p><?= htmlentities($game["description"])   ?></p>

<?php } else {
    echo "Details not found";
}

?>|



<?php require_once "footer.php" ?>