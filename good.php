
<?php
session_start();

include "conn.php";

extract($_POST);
$sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";

$result = $conn->query($sql);

if($result->num_rows!=0){
     $_SESSION['users'] = $result->fetch_object();
header("location:dashboard.php");

}
else{
     header("location:login.php?error= Incorrect username or password "."</br>");
     echo"please <a href ='login.php'> Try again</a>";
}



?>