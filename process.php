<?php

$name = $_POST["name"];
$age = $_POST["age"];
$course = $_POST["course"];

if ($name == "" || $age == "" || $course == "") {

    echo "<h2>Error!</h2>";
    echo "Please fill all required fields.";

}
else if (!is_numeric($age)) {

    echo "<h2>Error!</h2>";
    echo "Age must contain only numbers.";

}
else {

    echo "<h2>Registration Successful</h2>";

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Course: " . $course . "<br>";

    echo "Skills: ";

    if(isset($_POST["skill1"]))
        echo "HTML ";

    if(isset($_POST["skill2"]))
        echo "PHP ";

    if(isset($_POST["skill3"]))
        echo "Java ";
}

?>