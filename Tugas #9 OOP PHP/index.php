<?php
//animal
require_once('animal.php');

$sheep = new animal("Shaun");

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br>";
echo "<br>";

//frog
require_once('frog.php');

$kodok = new frog("buduk");

echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump . "<br>";
echo "<br>";

//ape
require_once('ape.php');

$sungokong = new ape("kera sakti");

echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell . "<br>";

?>