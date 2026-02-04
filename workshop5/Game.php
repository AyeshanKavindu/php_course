<?php
require_once "header.php";
require_once "libs/games.php";


?>

<h1>Games</h1>



<section>
    <?php foreach ($games as $index=>$game): ?>
        <article>
            <h2><?=$game["name"]  ?></h2>
            <a href="gamedetails.php?id=<?=$index  ?>">Read more</a>
        </article>
    <?php endforeach; ?>
</section>
<?php require_once "footer.php" ?>