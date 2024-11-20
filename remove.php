<?php
include "config.php";
$id = $_REQUEST['id'];
$sql = "DELETE FROM products WHERE id =  '$id'";
$conn->query($sql);

header("location: display.php");