<?php
    require_once("animal.php");
    require_once("frog.php");
    require_once("kera.php");
    echo "<h2>LATIHAN OOP</h2>";
    $sheep = new Animal("shaun");
    echo "Name: " . $sheep->name . "<br>";
    echo "Legs: " . $sheep->legs . "<br>"; // Default: 4
    echo "Cold blooded: " . $sheep->cold_blooded . "<br> <br>"; // "no"
    
    $kodok = new Frog("buduk");
    echo "Name: " . $kodok->name . "<br>";
    echo "Legs: " . $kodok->legs . "<br>"; // Default: 4
    echo "Cold blooded: " . $kodok->cold_blooded . "<br>"; // "no"
    echo "Jump : " . $kodok->jump() . "<br> <br>"; // "hop hop"

    $sungokong = new kera("kera sakti");
    echo "Name: " . $sungokong->name . "<br>";
    echo "Legs: " . $sungokong->legs . "<br>"; // Default: 4
    echo "Cold blooded: " . $sungokong->cold_blooded . "<br>"; // "no"
    echo "Yell : " . $sungokong->yell(); // "Auooo"

?>
