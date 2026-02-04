<?php
require_once "ArrayTools.php";

$numbers = [10, 20, 30, 40, 50];

echo "Highest mark: " . ArrayTools::max($numbers). "\n";
echo "Smallest mark: " . ArrayTools::min($numbers);

?>