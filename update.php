<?php
include "config.php";

extract($_POST);

$sql = "UPDATE products SET name = '$pname', price = '$pprice', quantity = '$pquantity' WHERE id = '$pid'";

$conn->query($sql);

header("location: display.php");