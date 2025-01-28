<?php

session_start();
if(isset($_SESSION['users'])){
    header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <center>
        <h1 class="mb-5 mt-4">Login page</h1>

        <form action="good.php" method="post">

       <?php  if(isset($_GET['error'])){?>
<p class="bg-success w-50  rounded-4 mt-5 p-3 pt-3 "> <?php echo $_GET['error'];?></p>
      <?php } ?> 
        <label for="" class="mb-3">Username</label>
        <input type="text" name="username"class="form-control w-50 rounded-4"  required>
        <label for="" class="mb-3 mt-3">Password</label>
        <input type="password" name="password" class="form-control w-50 rounded-4"  required><br>
        <button type="submit"  class="btn btn-outline-success  w-25 rounded-4  mb-4 ">Login</button>
        </form>
        <p>Or don't have an account <a href="registration.php">Create account ?</a></p>
    </center>
</body>
</html>