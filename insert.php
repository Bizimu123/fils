<?php
include  "conn.php";
if($_SERVER['REQUEST_METHOD']!="POST"){
    die("invalid request method");
}
extract($_POST);
$sql = "INSERT INTO users(fullnames,username,password) VALUES('$fullname','$username','$password')";

if($conn->query($sql)){
    header("location:registration.php?error= Created account successfully!!"."</br>");
    // header("location:registration.php?good=<a href='login.php'> <p>Continue to login !!</p></a>");
}

?>