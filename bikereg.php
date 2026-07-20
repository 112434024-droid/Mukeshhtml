<!DOCTYPE html>
<html>
<head>
    <title>Bike Registration Details</title>
</head>
<body>

<h2>Bike Registration Details</h2>

<?php

echo "Registration ID: " . $_GET["regid"] . "<br>";
echo "Owner Name: " . $_GET["name"] . "<br>";
echo "Bike Model: " . $_GET["model"] . "<br>";
echo "Brand: " . $_GET["brand"] . "<br>";

if(isset($_GET["helmet"]))
{
    echo "Accessory: " . $_GET["helmet"] . "<br>";
}

if(isset($_GET["gps"]))
{
    echo "Accessory: " . $_GET["gps"] . "<br>";
}

?>

</body>
</html>