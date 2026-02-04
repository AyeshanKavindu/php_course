<?php 
$games = [
    ["gameName" => "GTA 6", "Editor" => "Rockstar", "theYear" => 2026],
    ["gameName" => "Fortnite", "Editor" => "Epic games", "theYear" => 2017],
    ["gameName" => "Minecraft", "Editor" => "Mojang Studios", "theYear" => 2026],
    
];
$recentGameYear = 0;
$recentGameName = "";


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
    <?php foreach ($games as $game) { 
        if ($game["theYear"] > $recentGameYear) {
        $recentGameYear = $game["theYear"];
        $recentGameName = $game["gameName"];
    } ?>
            <li>Name: <?=$game["gameName"]  ?> - Editor: <?= $game["Editor"] ?> - Release year: <?= $game["theYear"] ?></li>
        <?php } echo "recent game year is $recentGameYear and The Game Name is $recentGameName"; ?>
    <ul>
</body>
</html>