<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Instance of Animal
$sheep = new Animal("shaun");
echo "Nama : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

// Instance of Frog
$frog = new Frog("buduk");
echo "Nama : " . $frog->name . "<br>";
echo "legs : " . $frog->legs . "<br>";
echo "cold blooded : " . $frog->cold_blooded . "<br>";
echo "jump : " . $frog->jump() . "<br><br>";

// Instance of Ape
$ape = new Ape("kera sakti");
echo "Nama : " . $ape->name . "<br>";
echo "legs : " . $ape->legs . "<br>";
echo "cold blooded : " . $ape->cold_blooded . "<br>";
echo "Yell : " . $ape->yell() . "<br>";