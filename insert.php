<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    die("Invalid request method");
}

include "config.php";

extract($_POST);

$sql = "INSERT INTO `products`(`name`, `price`, `quantity`) VALUES ('$pname','$pprice','$pquantity')";

// validate fields
if (empty($pname) || empty($pprice) || empty($pquantity)) {
    die("All field is required");
}

if($conn->query($sql)) {
    header("location: display.php");
    // die("Producted registered !");
} else {
    die("Failed to register a new product !");
}
