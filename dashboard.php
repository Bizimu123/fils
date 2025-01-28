<?php

session_start();
$user= $_SESSION['users'];

if(!isset($_SESSION['users'])){
    header("location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <center>
   <h1 class="mb-5">Welcome to dashboard page</h1> 
   <h2>Hello <?php  echo $user->username; ?> Welcome to dashboard</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nihil cumque culpa,</br> aut dolorem aperiam laborum consequuntur velit neque doloribus accusantium hic voluptate atque, quia repellat officia adipisci quaerat ea.</p>

   <a href="logout.php"><button type="submit"  class="btn btn-outline-success  w-25 rounded-4  mb-5 mt-5  ">Logout</button></a>
   </center>
</body>
</html>