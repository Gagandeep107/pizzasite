<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $crust = $_POST["crust"];
    $size = $_POST["size"];
    $toppings = isset($_POST["toppings"]) ? $_POST["toppings"] : array();
    $instructions = $_POST["instructions"];

    // Perform further processing or database operations here
    // For now, let's just print the received data
    echo "Name: $name <br>";
    echo "Address: $address <br>";
    echo "City: $city <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Crust: $crust <br>";
    echo "Size: $size <br>";
    echo "Toppings: " . implode(", ", $toppings) . "<br>";
    echo "Instructions: $instructions <br>";
}
?>
