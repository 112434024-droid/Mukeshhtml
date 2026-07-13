<?php

echo "<center>";

echo "<h2>Bike Registration Details</h2>";

echo "Name: " . $_POST["name"] . "<br>";
echo "Bike Number: " . $_POST["number"] . "<br>";
echo "Model: " . $_POST["model"] . "<br>";
echo "Color: " . $_POST["color"] . "<br>";

echo "Accessories: ";

if(isset($_POST["helmet"]))
    echo "Helmet ";

if(isset($_POST["cover"]))
    echo "Cover ";

echo "</center>";

?>