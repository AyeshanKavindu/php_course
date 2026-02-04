<?php
$games = [
    ["name" => "Grand Theft Auto V", "editor" => "Rockstar Games", "year" => 1997, "description" => "An open-world action–adventure game set in Los Santos. Players switch between three characters and complete missions while exploring a huge world full of activities."],
    ["name" => "Fortnite", "editor" => "Epic Games", "year" => 2017, "description" => "A battle-royale game where 100 players fight to be the last one standing. Known for fast building mechanics, colorful graphics, and frequent live events."],
    ["name" => "Minecraft", "editor" => "Mojang Studios", "year" => 2011, "description" => "A sandbox building game where players explore block-based worlds, mine resources, craft items, and create anything they imagine. Survival and Creative modes are included." ],
    ["name" => "Call of Duty: Modern Warfare II", "editor" => "Activition", "year" => 2022, "description" => "A first-person shooter focusing on tactical missions, realistic combat, and online multiplayer game modes. It continues the Modern Warfare storyline."]
];


function getGameById(int $index, $games):array
{
    return $games[$index];
}